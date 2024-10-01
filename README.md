# API

The microservice was built using [Lumen](https://lumen.laravel.com/docs), which is essentially a lighter version of Laravel.

I chose Lumen for its scalability benefits. Unlike Laravel, which comes with many built-in dependencies, Lumen is more lightweight and consumes fewer resources, making it easier to scale efficiently.

## First Run

First copy .env-sample and create a .env file

```
docker-compose build
php artisan migrate
php artisan db:seed
```

## Running

```
docker-compose up
```
