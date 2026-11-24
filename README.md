# Amjad Alwattar — Portfolio

Personal portfolio built with Laravel 12, PHP 8.5, Vite and Tailwind CSS.

## Local development

```bash
cp .env.example .env
composer install
npm ci
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

## Production configuration

Keep `APP_DEBUG=false` in production and configure the dashboard password as a hash:

```bash
php -r "echo password_hash('your-strong-password', PASSWORD_DEFAULT), PHP_EOL;"
```

Put the generated value in `ADMIN_PASSWORD_HASH`. If the hash is missing, dashboard access remains disabled.

## Docker

The production image uses PHP 8.5 FPM and Node 20 for the frontend build. It
creates the SQLite database, runs migrations, and caches Laravel configuration
when the container starts:

```bash
docker build -t amjad-portfolio .
```

Generate a persistent application key once, then pass it to every replacement
container. Bind-mount the external SQLite file so visitor/session data survives
image updates (the VPS IaC exposes this file through its project symlink):

```bash
APP_KEY="$(php -r "echo 'base64:'.base64_encode(random_bytes(32));")"

docker run -d \
  --name amjad-portfolio \
  --restart unless-stopped \
  -e APP_KEY="$APP_KEY" \
  -e APP_ENV=production \
  -e APP_DEBUG=false \
  -e LOG_CHANNEL=stderr \
  -v /absolute/path/to/database.sqlite:/var/www/html/database/database.sqlite \
  ghcr.io/amgad226/laravel-portfolio:latest
```

The image listens on PHP-FPM port `9000`; point the VPS Nginx `fastcgi_pass` to
the container on that port. Laravel exceptions, PHP errors, PHP-FPM access logs,
and startup/migration errors are written to the container streams:

```bash
docker logs --tail 200 -f amjad-portfolio
```

Do not bind-mount the project over `/var/www/html` or mount an old
`public/build` directory in production. Those mounts hide the compiled Vite
manifest shipped in the image and cause a 500 response. The VPS Compose setup
uses a shared `public` volume; the image entrypoint refreshes that volume on
every deployment before PHP-FPM starts.

If migrations are managed separately, set `RUN_MIGRATIONS=false`. To diagnose a
temporary production problem, keep `APP_DEBUG=false` and inspect `docker logs`;
the full exception is logged without exposing it to website visitors.

## Verification

```bash
php artisan test
composer audit
npm audit --omit=dev
npm run build
```
