FROM nextcloud:latest

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    awscli \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY config.php /var/www/html/config/config.php

RUN chown www-data:www-data /var/www/html/config/config.php && \
    chmod 640 /var/www/html/config/config.php
