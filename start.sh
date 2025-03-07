#!/bin/bash

echo "🚀 Installation des dépendances Composer..."
composer install --no-dev --optimize-autoloader

echo "🔑 Génération de la clé de l'application..."
php artisan key:generate

echo "🔄 Exécution des migrations et seeders..."
php artisan migrate --force
php artisan db:seed --force

echo "✅ Démarrage du serveur Laravel..."
php artisan serve --host=0.0.0.0 --port=8000
