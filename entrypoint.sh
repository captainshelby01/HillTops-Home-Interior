#!/bin/sh
set -e

echo "=== Starting Laravel Initialization ==="

# Force container runtime variables
export DB_CONNECTION=sqlite
export DB_DATABASE=/app/database/database.sqlite
export ASSET_URL=/

# Ensure database directory and file exist with full read/write permissions
mkdir -p /app/database
touch /app/database/database.sqlite
chmod -R 777 /app/database /app/storage /app/bootstrap/cache

# Clear build-time caches
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Run migrations & seed database
echo "=== Running Database Migrations & Portfolio Seeder ==="
php artisan migrate --force
php artisan db:seed --class=PortfolioSeeder --force

# Cache routes & views for fast production performance
php artisan route:cache
php artisan view:cache

# Start application server
echo "=== Starting Application on Port ${PORT:-8080} ==="
exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"
