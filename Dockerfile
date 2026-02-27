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
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    zip unzip git curl && \
    docker-php-ext-install pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel app
COPY . .

# Copy built frontend assets from node-builder
COPY --from=node-builder /app/public/build public/build

# Set permissions (optional, for storage & cache)
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port
EXPOSE 9000

# Run PHP-FPM
CMD ["php-fpm"]