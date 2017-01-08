FROM ubuntu:latest
MAINTAINER Alex <alex@nikitin.ninja>

RUN apt-get update && \
	apt-get -y upgrade && \
	apt-get -y install \ 
	apache2 \ 
	php7.0 \ 
	php7.0-mysql \
	libapache2-mod-php7.0 \
	curl \
	wget

RUN a2enmod php7.0
RUN a2enmod rewrite

# Copy this folder to the project file
ADD . /var/www/html/

RUN /var/www/html/deploy.sh

# Save apache configuration file with mod_rewrite
RUN cp /var/www/html/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Creating temp directory
RUN mkdir /var/www/html/tmp/
RUN chmod 777 /var/www/html/tmp/

EXPOSE 80

CMD /usr/sbin/apache2ctl -D FOREGROUND
