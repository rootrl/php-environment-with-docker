FROM php:7.2-fpm
RUN pecl install redis \
    && pecl install xdebug \
    && pecl install swoole \
    && docker-php-ext-enable redis xdebug swoole
