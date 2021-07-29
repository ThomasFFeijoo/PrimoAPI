FROM php:8.0-fpm-alpine3.14

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

VOLUME /primoapi

WORKDIR /primoapi

EXPOSE 8000

CMD [ "sh", "-c", "php -S 0.0.0.0:8000 -t public/" ]

HEALTHCHECK --interval=30s --timeout=30s CMD curl --silent --fail http://127.0.0.1:8000