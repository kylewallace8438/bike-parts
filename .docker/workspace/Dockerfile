# workspace/Dockerfile
FROM php:8.2-cli

# Install Node.js 22
RUN apt-get update && apt-get install -y ca-certificates curl gnupg
RUN mkdir -p /etc/apt/keyrings
RUN curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg
RUN echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_22.x nodistro main" > /etc/apt/sources.list.d/nodesource.list

# Install dependencies and tools
RUN apt-get update && apt-get install -y \
    nodejs \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    vim \
    supervisor

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Verify Node.js and npm versions
RUN node -v && npm -v

# Install global npm packages
RUN npm install -g npm@latest

# Set working directory
WORKDIR /var/www

# Install Redis extension (using PECL with increased timeout)
RUN pear config-set php_ini /usr/local/etc/php/php.ini && \
    pecl channel-update pecl.php.net && \
    echo "" | pecl install redis
