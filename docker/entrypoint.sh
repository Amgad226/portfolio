#!/bin/sh

set -eu

log() {
    printf '[portfolio-entrypoint] %s\n' "$*" >&2
}

cd /var/www/html

export APP_ENV="${APP_ENV:-production}"
export APP_DEBUG="${APP_DEBUG:-false}"
export LOG_CHANNEL="${LOG_CHANNEL:-stderr}"
export LOG_LEVEL="${LOG_LEVEL:-info}"
export DB_CONNECTION="${DB_CONNECTION:-sqlite}"
export SESSION_DRIVER="${SESSION_DRIVER:-database}"
export CACHE_STORE="${CACHE_STORE:-database}"
export QUEUE_CONNECTION="${QUEUE_CONNECTION:-database}"

mkdir -p \
    storage/app \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

log 'Synchronizing the image public directory for the web server.'
mkdir -p public
cp -a /opt/portfolio-public/. public/

if [ ! -f public/build/manifest.json ] \
    || ! grep -q '"resources/css/portfolio-refresh.css"' public/build/manifest.json; then
    log 'ERROR: required Vite assets are unavailable. Do not mount over /var/www/html or /var/www/html/public/build in production.'
    exit 1
fi

if [ -z "${APP_KEY:-}" ]; then
    runtime_key_file="${APP_RUNTIME_KEY_FILE:-/var/www/html/storage/app/runtime-app-key}"

    if [ -s "$runtime_key_file" ]; then
        APP_KEY="$(cat "$runtime_key_file")"
        log 'APP_KEY was not provided; reusing the generated runtime key.'
    else
        mkdir -p "$(dirname "$runtime_key_file")"
        APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
        (umask 077 && printf '%s' "$APP_KEY" > "$runtime_key_file")
        log 'WARNING: APP_KEY was not provided; generated a runtime key. Set APP_KEY on the VPS to keep encrypted data valid across replacement containers.'
    fi

    export APP_KEY
fi

if [ "$DB_CONNECTION" = 'sqlite' ]; then
    database_path="${DB_DATABASE:-/var/www/html/database/database.sqlite}"

    case "$database_path" in
        /*) ;;
        *) database_path="/var/www/html/$database_path" ;;
    esac

    mkdir -p "$(dirname "$database_path")"
    touch "$database_path"
    chown www-data:www-data "$database_path" "$(dirname "$database_path")"
    chmod 664 "$database_path"
    export DB_DATABASE="$database_path"
    log "SQLite database ready at $database_path."
fi

chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwX storage bootstrap/cache

# Remove stale runtime caches that may contain build- or host-specific values.
rm -f bootstrap/cache/config.php bootstrap/cache/events.php bootstrap/cache/routes-*.php
php artisan view:clear --no-interaction

if [ "${RUN_MIGRATIONS:-true}" = 'true' ]; then
    log 'Running database migrations.'
    if ! php artisan migrate --force --no-interaction; then
        log 'ERROR: database migrations failed; PHP-FPM will not start.'
        exit 1
    fi
fi

if [ "${CACHE_CONFIG:-true}" = 'true' ]; then
    log 'Caching Laravel configuration and views.'
    php artisan config:cache --no-interaction
    php artisan view:cache --no-interaction
fi

chown -R www-data:www-data bootstrap/cache storage/framework
chmod -R ug+rwX bootstrap/cache storage/framework

log "Starting: $*"
exec "$@"
