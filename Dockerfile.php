FROM php:7.2-fpm

    Run  ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
    && echo "Asia/Shanghai" > /etc/timezone \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && pecl install redis \
    && pecl install swoole \
    && docker-php-ext-enable redis swoole
