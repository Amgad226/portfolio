# ===============================
# Stage 1: Build frontend assets
# ===============================
FROM node:20-alpine AS node-builder

WORKDIR /app

# Copy package files and install dependencies
COPY package*.json ./
RUN npm install

# Copy Vite/Tailwind configs and source
COPY tailwind.config.js postcss.config.js vite.config.js ./
COPY resources resources

# Build frontend assets
RUN npm run build

# ===============================
# Stage 2: PHP Laravel image
# ===============================
FROM php:8.2-fpm

WORKDIR /var/www/html

# Make apt non-interactive
ENV DEBIAN_FRONTEND=noninteractive

# -------------------------------
# Install system dependencies + PHP extensions
# -------------------------------
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    curl \
    libzip-dev \
    zlib1g-dev \
    libsqlite3-dev \
    libxml2-dev \
    libonig-dev \
    build-essential \
    pkg-config \
    autoconf \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_sqlite \
        mbstring \
        bcmath \
        xml \
        zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# -------------------------------
# Install Composer
# -------------------------------
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# -------------------------------
# Copy composer files first (for caching)
# -------------------------------
# Install PHP dependencies
COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# -------------------------------
# Copy Laravel app
# -------------------------------

# -------------------------------
# Copy built frontend assets from node-builder
# -------------------------------
COPY --from=node-builder /app/public/build public/build


# Ensure required directories exist
RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# Set correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

    
# -------------------------------
# Set permissions for storage & cache
# -------------------------------
RUN chown -R www-data:www-data storage bootstrap/cache

# -------------------------------
# Expose PHP-FPM port
# -------------------------------
EXPOSE 9000

# -------------------------------
# Run PHP-FPM
# -------------------------------
CMD ["php-fpm"]