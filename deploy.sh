#!/bin/sh
cd /var/www/html/
wget https://getcomposer.org/composer.phar
php composer.phar update
rm composer.phar*
