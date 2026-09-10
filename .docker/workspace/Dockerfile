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

# Install gosu (tiny setuid helper used by the entrypoint drop-root wrapper).
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends gosu; \
    rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www

# Install Redis extension (using PECL with increased timeout)
RUN pear config-set php_ini /usr/local/etc/php/php.ini && \
    pecl channel-update pecl.php.net && \
    echo "" | pecl install redis

# Create host-matching user (UID=1000 matches host "kyle") so files
# written inside the container are owned by the host user.
ARG PUID=1000
ARG PGID=1000
ENV PUID=${PUID} PGID=${PGID} USER_NAME=laravel GROUP_NAME=laravel APP_DIR=/var/www
RUN groupadd -g ${PGID} laravel || true && \
    useradd -u ${PUID} -g laravel -m -s /bin/bash laravel || true

# Add a per-shell MOTD + bash prompt that makes it obvious when you're root.
COPY bashrc.sh /etc/bash.bashrc.workspace
RUN cat /etc/bash.bashrc.workspace >> /etc/bash.bashrc && \
    cat /etc/bash.bashrc.workspace >> /home/laravel/.bashrc 2>/dev/null || true

# Entrypoint: if this container is ever started as root it will chown writable
# dirs and then `gosu` down to PUID:PGID before running the command.
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Ensure /var/www is owned by the laravel user on first build
# (bind mounts will override ownership at runtime, which is fine).
RUN chown -R ${PUID}:${PGID} /var/www

# Entrypoint + USER together make `docker compose exec workspace ...` always
# land as UID 1000 (laravel) on a healthy deployment. Compose adds user: 1000:1000
# as a belt-and-braces fallback on top.
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Run subsequent commands and interactive shells as the non-root user.
USER ${PUID}:${PGID}
