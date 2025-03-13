FROM php:8.2-fpm
WORKDIR /app
COPY . /app
RUN apt-get update && apt-get install -y nginx
CMD ["php-fpm"]