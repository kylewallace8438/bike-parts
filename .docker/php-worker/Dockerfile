# php-worker/Dockerfile
FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    supervisor

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Redis extension (using PECL with increased timeout)
RUN pear config-set php_ini /usr/local/etc/php/php.ini && \
    pecl channel-update pecl.php.net && \
    echo "" | pecl install redis

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Setup supervisor
RUN mkdir -p /var/log/supervisor
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set working directory
WORKDIR /var/www

# Default command
CMD ["/usr/bin/supervisord"]
