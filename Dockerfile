FROM php:8.2-fpm-buster

# Set working directory
WORKDIR /var/www

# Add PHP extensions installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

# Install PHP extensions
RUN install-php-extensions mbstring pdo_mysql zip exif pcntl gd

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    supervisor \
    nginx \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer \
 && chmod +x /usr/local/bin/composer

# Create user
RUN groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www

# Copy Laravel app
COPY .env.example .env
COPY --chown=www-data:www-data . /var/www

# Set permissions
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache \
 && chown -R www-data:www-data /var/www

# Copy config files
COPY docker/php.ini /usr/local/etc/php/conf.d/app.ini
COPY docker/nginx.conf /etc/nginx/
COPY docker/default /etc/nginx/sites-enabled/default
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/run.sh /var/www/docker/run.sh

RUN chmod +x /var/www/docker/run.sh

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

EXPOSE 80
ENTRYPOINT ["/var/www/docker/run.sh"]