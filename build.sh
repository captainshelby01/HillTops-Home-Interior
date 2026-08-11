#!/usr/bin/env bash
# exit on error
set -o errexit

echo "Installing PHP dependencies..."
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

echo "Installing Node dependencies & compiling Vite assets..."
npm install
npm run build

echo "Setting up Database..."
touch database/database.sqlite
php artisan migrate:fresh --force --seed

echo "Caching Laravel configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
