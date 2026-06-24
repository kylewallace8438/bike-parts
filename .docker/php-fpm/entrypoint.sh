#!/bin/bash
set -e

# Run composer install if composer.json exists
if [ -f "composer.json" ]; then
    echo "Running composer install..."
    composer install --no-interaction --optimize-autoloader --no-progress
fi

# Copy .env.example to .env if .env doesn't exist
if [ ! -f ".env" ] && [ -f ".env.example" ]; then
    echo "Creating .env file from .env.example..."
    cp .env.example .env
fi

# Generate application key if not set
if [ -f ".env" ]; then
    echo "Generating application key..."
    php artisan key:generate --no-interaction
fi

# Wait for database to be ready
echo "Waiting for database connection..."
until php artisan tinker --execute="DB::connection()->getPdo();" > /dev/null 2>&1; do
    echo "Database not ready, waiting..."
    sleep 2
done

echo "Database is ready!"

# Run migrations
echo "Running database migrations..."
php artisan migrate --force

echo "Starting PHP-FPM..."
exec php-fpm
