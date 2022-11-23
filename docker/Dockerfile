FROM motorcms/motor-headless-php-81-prod:main

WORKDIR /var/www
COPY .. /var/www

RUN cp .env.example .env && composer install && php artisan key:generate && php artisan storage:link

CMD php-fpm
