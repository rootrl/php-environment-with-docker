#!/usr/bin/env bash

docker run -it --rm --name oa-php-cli -v "$PWD"/script:/var/www/script -w /var/www/script oa-php-fpm php -m
