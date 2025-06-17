FROM nextcloud:latest

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    awscli \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY config.php /var/www/html/config/config.php

RUN chown -R www-data:www-data /var/www/html/config && \
    chmod -R 750 /var/www/html/config && \
    touch /var/www/html/config/CAN_INSTALL && \
    chown www-data:www-data /var/www/html/config/CAN_INSTALL && \
    chmod 644 /var/www/html/config/CAN_INSTALL
