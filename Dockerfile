# Production Dockerfile for Laravel deployment on Render
FROM php:8.3-cli-alpine

# Install system dependencies, Node.js, npm, and PHP extensions
RUN apk add --no-linux-headers --no-cache \
    git \
    curl \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    sqlite-dev

RUN docker-php-ext-install pdo pdo_sqlite pdo_mysql mbstring bcmath gd

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy application files
COPY . .

# Install PHP & Node dependencies
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
RUN npm install && npm run build

# Create SQLite database and run migrations/seed
RUN touch database/database.sqlite && php artisan migrate:fresh --force --seed

# Cache Laravel configuration
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Set permissions
RUN chmod -R 777 storage bootstrap/cache database

# Expose port (Render passes PORT environment variable)
ENV PORT=8080
EXPOSE 8080

# Start command
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8080}"]
