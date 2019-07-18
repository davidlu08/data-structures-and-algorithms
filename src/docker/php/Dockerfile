FROM php:7.1-fpm

RUN apt-get update -y && apt-get install -y zip vim unzip libmemcached-dev zlib1g-dev \
    && docker-php-ext-install pdo_mysql \
    && pecl install memcached-3.1.3 \
    && pecl install redis-4.0.1 \
    && pecl install xdebug-2.6.1 \
    && docker-php-ext-enable memcached redis xdebug

# Install php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer