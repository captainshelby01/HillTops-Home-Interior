#!/bin/sh
set -e

# Ensure database file exists with permissions
mkdir -p /app/database
touch /app/database/database.sqlite
chmod -R 777 /app/database /app/storage /app/bootstrap/cache

# Clear any build-time config cache so runtime ENV vars (APP_KEY, etc) are read live
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true

# Run database migrations and seeders if tables are missing
php artisan migrate --force || true
php artisan db:seed --class=PortfolioSeeder --force || true

# Start server
echo "Starting server on port ${PORT:-8080}..."
exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"
