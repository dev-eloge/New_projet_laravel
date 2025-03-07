#!/bin/bash

# Installer les dépendances PHP
composer install --no-interaction --optimize-autoloader --prefer-dist

# Générer la clé de l'application Laravel
php artisan key:generate

# Appliquer les migrations de la base de données (si applicable)
php artisan migrate --force

# Lancer le serveur PHP avec le mode production
php -S 0.0.0.0:8000 -t public
