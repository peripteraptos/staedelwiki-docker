FROM mediawiki:1.41
WORKDIR /var/www/html
#ENV FLASK_APP=app.py
#ENV FLASK_RUN_HOST=0.0.0.0
#RUN apk add --no-cache gcc musl-dev linux-headers
#COPY requirements.txt requirements.txt
#RUN pip install -r requirements.txt
#EXPOSE 5000
RUN apt update && apt install unzip && curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php && php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
COPY ./src /var/www/scripts
RUN chown -R www-data /var/www/html
USER www-data
RUN /var/www/scripts/install_script.sh
RUN cp composer.local.json-sample composer.local.json && composer update --no-dev
USER root
RUN /var/www/scripts/fix_permissions.sh
#CMD ["flask", "run"]
