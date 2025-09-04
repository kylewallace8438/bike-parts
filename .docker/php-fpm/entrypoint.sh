#!/bin/bash
set -e

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
