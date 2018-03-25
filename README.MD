### docker-compose service:
- php-fpm
- nginx
- mysql
- redis

### php extension:
- redis
- swoole


### USAGE
#### Example for using laravel:

step1: install laravel with compser:

```bash
./bin/composer create-project --prefer-dist laravel/laravel www
```

step2: start all  docker container with docker-compose  (php redis nginx mysql..):
```
./start
```

Then enjoy!
website: http://ip:8888

For using laravel artisan or other script just following the command:
```bash
./bin/php artisan
```
