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

# Create host-matching user (UID=1000 matches host "kyle").
# Supervisord master runs as root; queue workers drop to this user
# via the `user=` directive in supervisord.conf.
ARG PUID=1000
ARG PGID=1000
RUN groupadd -g ${PGID} laravel || true && \
    useradd -u ${PUID} -g laravel -M -s /bin/bash laravel || true

# Set working directory
WORKDIR /var/www

# Default command
CMD ["/usr/bin/supervisord"]
