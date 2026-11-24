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

The production image uses PHP 8.5 FPM and Node 20 for the frontend build:

```bash
docker build -t amjad-portfolio .
```

Run migrations during deployment before sending traffic to the new release:

```bash
php artisan migrate --force
```

## Verification

```bash
php artisan test
composer audit
npm audit --omit=dev
npm run build
```
