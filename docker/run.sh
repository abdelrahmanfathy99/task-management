#!/bin/sh

cd /var/www

php artisan cache:clear
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan migrate --seed

chmod -R 775 /var/www/storage /var/www/bootstrap/cache/
chown www-data:www-data /var/www
chmod -R 775 /var/www

/usr/bin/supervisord -c /etc/supervisord.conf