# Production Dockerfile for Laravel deployment on Render
FROM php:8.3-cli-alpine

# Install system dependencies, Node.js, npm, and PHP extensions
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    sqlite-dev \
    linux-headers

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

# Make entrypoint script executable
RUN chmod +x /app/entrypoint.sh

# Expose port
ENV PORT=8080
EXPOSE 8080

# Run runtime entrypoint script
ENTRYPOINT ["/app/entrypoint.sh"]
