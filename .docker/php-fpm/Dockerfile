# php-fpm/Dockerfile
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Install Redis extension (using PECL with increased timeout)
RUN pear config-set php_ini /usr/local/etc/php/php.ini && \
    pecl channel-update pecl.php.net && \
    echo "" | pecl install redis

# Create host-matching user (UID=1000 matches host "kyle").
# PHP-FPM workers will drop to this user; master still runs as root
# so the entrypoint can perform privileged startup tasks (composer,
# migrations, key:generate, chown of writable dirs).
ARG PUID=1000
ARG PGID=1000
RUN groupadd -g ${PGID} laravel || true && \
    useradd -u ${PUID} -g laravel -M -s /usr/sbin/nologin laravel || true

# Override the default www.conf pool to run workers as laravel.
COPY www.conf /usr/local/etc/php-fpm.d/www.conf

# Copy entrypoint script
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Use custom entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
