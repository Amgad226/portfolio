# ===============================
# Stage 1: Build frontend assets
# ===============================
FROM node:20-alpine AS node-builder

WORKDIR /app

# Copy package files and install dependencies
COPY package*.json ./
RUN npm ci

# Copy Vite/Tailwind configs and source
COPY tailwind.config.js postcss.config.js vite.config.js ./
COPY resources resources

# Build frontend assets
RUN npm run build

# ===============================
# Stage 2: PHP Laravel image
# ===============================
FROM php:8.5-fpm

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
        pdo_mysql \
        pdo_sqlite \
        mbstring \
        bcmath \
        xml \
        zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# -------------------------------
# Install Composer
# -------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the application, then install production PHP dependencies.
COPY . .
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-progress

# -------------------------------
# Copy built frontend assets from node-builder
# -------------------------------
COPY --from=node-builder /app/public/build public/build

# Keep an immutable copy outside the application path. The VPS shares public/
# with its Nginx container, so the entrypoint refreshes that volume on deploy.
RUN php -r '$manifest = json_decode(file_get_contents("public/build/manifest.json"), true, 512, JSON_THROW_ON_ERROR); if (! isset($manifest["resources/css/portfolio-refresh.css"])) { fwrite(STDERR, "Required Vite entry is missing from the manifest.\n"); exit(1); }' \
    && cp -a public /opt/portfolio-public

# Send PHP and PHP-FPM errors/access logs to the container streams.
COPY docker/php.ini /usr/local/etc/php/conf.d/zz-portfolio-production.ini
COPY docker/php-fpm.conf /usr/local/etc/php-fpm.d/zz-portfolio-logs.conf
COPY docker/entrypoint.sh /usr/local/bin/portfolio-entrypoint


# Ensure required directories exist
RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/app \
    storage/logs \
    bootstrap/cache

# Set correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chmod +x /usr/local/bin/portfolio-entrypoint

# -------------------------------
# Expose PHP-FPM port
# -------------------------------
EXPOSE 9000

# -------------------------------
# Run PHP-FPM
# -------------------------------
ENTRYPOINT ["portfolio-entrypoint"]
CMD ["php-fpm"]
