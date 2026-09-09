#!/bin/bash
set -e

echo "Setting /var/www as a git safe.directory (if inside a repo)..."
git config --global --add safe.directory /var/www || true

# Run composer install if composer.json exists and vendor is missing
if [ -f "composer.json" ] && [ ! -d "vendor" ]; then
    echo "Running composer install..."
    composer install --no-interaction --optimize-autoloader --no-progress
fi

# Copy .env.example to .env if .env doesn't exist
if [ ! -f ".env" ] && [ -f ".env.example" ]; then
    echo "Creating .env file from .env.example..."
    cp .env.example .env
fi

# Generate application key ONLY if not already set in .env
if [ -f ".env" ]; then
    CURRENT_KEY=""
    # shellcheck disable=SC2002
    CURRENT_KEY=$(cat .env | grep '^APP_KEY=' | head -n1 | cut -d'=' -f2- | tr -d '\r' || true)
    if [ -z "$CURRENT_KEY" ] || [ "$CURRENT_KEY" = '""' ] || [ "$CURRENT_KEY" = "''" ]; then
        echo "Generating application key..."
        php artisan key:generate --no-interaction
    else
        echo "Application key already set; skipping key:generate."
    fi
fi

# Wait for database to be ready
echo "Waiting for database connection..."
until php artisan tinker --execute="DB::connection()->getPdo();" > /dev/null 2>&1; do
    echo "Database not ready, waiting..."
    sleep 2
done

echo "Database is ready!"

# Run migrations (non-fatal — failures can happen when columns/indexes
# already exist from previously-run migrations; log and continue).
echo "Running database migrations..."
php artisan migrate --force || echo "WARNING: migrations reported errors (see above); continuing startup."

# Ensure writable directories are owned by the host-matching laravel user
# so files written by PHP-FPM workers belong to the host user (UID 1000).
echo "Fixing storage & bootstrap/cache ownership..."
chown -R laravel:laravel /var/www/storage /var/www/bootstrap/cache
find /var/www/storage /var/www/bootstrap/cache -type d -exec chmod 775 {} \;
find /var/www/storage /var/www/bootstrap/cache -type f -exec chmod 664 {} \;

echo "Starting PHP-FPM..."
exec php-fpm
