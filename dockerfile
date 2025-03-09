# Utilisez une image de base avec Nginx et PHP-FPM
FROM richarvey/nginx-php-fpm:1.7.2

# Copiez les fichiers du projet dans le conteneur
COPY . .

# Image config
ENV SKIP_COMPOSER 0  # Autorise l'exécution de Composer
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Autorise Composer à s'exécuter en tant que superutilisateur
ENV COMPOSER_ALLOW_SUPERUSER 1

# Installez les dépendances Composer
RUN composer install --no-dev --optimize-autoloader

# Définissez les permissions pour les dossiers Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Démarrez le serveur
CMD ["/start.sh"]