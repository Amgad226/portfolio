# Stage 1: Build frontend assets
FROM node:20-alpine AS node-builder

WORKDIR /app

# Install dependencies
COPY package*.json ./
RUN npm install

COPY tailwind.config.js postcss.config.js vite.config.js ./
COPY resources resources
RUN npm run build

# Stage 2: PHP Laravel image
FROM php:8.2-fpm

WORKDIR /var/www/html

# Install PHP extensions for Laravel

# -------------------------------
ENV DEBIAN_FRONTEND=noninteractive
# -------------------------------
# Install system dependencies first
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zlib1g-dev \
    sqlite3 \
    libsqlite3-dev \
    libxml2-dev \
    && docker-php-ext-install \
       pdo \
       pdo_sqlite \
       mbstring \
       tokenizer \
       bcmath \
       xml \
       zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# -------------------------------
# Install Composer
# -------------------------------
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# -------------------------------
# Copy composer files first for caching
# -------------------------------
COPY composer.json composer.lock ./

# -------------------------------
# Install PHP dependencies
# -------------------------------
RUN composer install --no-dev --optimize-autoloader

# -------------------------------
# Copy rest of Laravel app
# -------------------------------
COPY . .
# Copy built frontend assets from node-builder
COPY --from=node-builder /app/public/build public/build

# Set permissions (optional, for storage & cache)
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port
EXPOSE 9000

# Run PHP-FPM
CMD ["php-fpm"]