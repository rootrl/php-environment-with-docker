FROM php:7.2-fpm

RUN apt-get update --fix-missing && apt-get install -y \
    g++ autoconf bash git apt-utils libxml2-dev libcurl3-dev pkg-config \
    && ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
    && echo "Asia/Shanghai" > /etc/timezone \
    && docker-php-ext-install iconv curl mbstring \
        xml json mcrypt mysqli pdo pdo_mysql zip \
    && docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && docker-php-ext-enable gd \
    && pecl install /pecl/redis-3.0.0.tgz \
    && pecl install swoole \
    && docker-php-ext-enable redis swoole \
    && apt-get purge -y --auto-remove \
    && rm -rf /var/cache/apt/* \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /pecl
