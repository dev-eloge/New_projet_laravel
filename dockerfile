# Utilisez une image PHP officielle
FROM php:8.2-cli

# Définissez le répertoire de travail
WORKDIR /app

# Copiez les fichiers du projet dans le conteneur
COPY . .

# Installez les dépendances système nécessaires pour Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql

# Installez Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installez les dépendances du projet
RUN composer install --no-dev --optimize-autoloader

# Exposez le port 8000
EXPOSE 8000

# Démarrez le serveur Laravel
CMD ["./start.sh"]