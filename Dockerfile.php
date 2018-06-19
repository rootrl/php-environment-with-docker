FROM php:7.2-fpm
    Run echo "nameserver 223.5.5.5" >> /etc/resolv.conf \
    && echo "nameserver 223.6.6.6" >> /etc/resolve.conf \
    && apt-get update \
    && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli pdo_mysql \
    && pecl install swoole \
    && pecl install redis \
    && docker-php-ext-enable swoole redis
