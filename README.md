# Mon projet Laravel

Ce projet est une api permettant de créer, modifier, supprimer des fiches de profile de star.

## Installation

1. Cloner le repository :

git clone https://github.com/yoannC69/test-technique-hellocse-back.git


2. Installer les dépendances :

cd test-technique-hellocse-back
composer install
npm install


3. Configurer l'environnement :

Créez un fichier .env en copiant le fichier .env.example fourni


4. Configurer la base de données :

Dans le fichier `.env`, remplacer les valeurs `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` et `DB_PORT` par les informations de votre base de données.


5. Lancer les migrations :

php artisan migrate


6. Lancer le serveur :

php artisan serve --port=8000