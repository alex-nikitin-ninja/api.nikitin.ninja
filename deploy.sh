#!/bin/sh
wget https://getcomposer.org/composer.phar
php composer.phar update
rm composer.phar*
