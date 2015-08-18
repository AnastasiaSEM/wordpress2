FROM wordpress:4.2.4-apache

COPY docker-entrypoint.sh /entrypoint.sh

ADD thrive-visual-editor /var/www/html/wp-content/plugins/thrive-visual-editor

RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
