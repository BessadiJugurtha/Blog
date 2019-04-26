## Projet de création d’une application web (Blog)
Dans le cadre d'un projet en Programmation web coté serveur on a développé un site web(Blog) en utilisant le framwork Laravel.
Ce Blog permet aux utilisateurs de consulter et écrire des postes. un utilisateur a aussi la possibilité de s'enregistrer (créer un compte), pour pouvoir devenir membre actif dans le blog.

# Conditions préalables 
Pour utiliser cette application,vous devez disposer des éléments suivants : 
* PHP version 5.5.9 minimum 
* SQLite (configurer PHP et Laravel pour connecter avec SQLite)
* Composer
* Git 

# Commencer 

# Installation
Pour commencer à utiliser cette application il faut suivre ces étapes d'installation:
 > Etape 01: ouvrez un terminal et placez-vous dans le répertoir dans lequel voulez-vous intaller l'applicationExécuter et exécuter ces commandes : 
  1. git clone https://github.com/BessadiJugurtha/Blog.git
  2. composer install 
 > Etape 02: configuration du fichier .env
 Ouvrez le dossier du projet dans un éditeur de texte (SublimeTexte, Visual Studio Code)
  1. renommer le fichier ".env.example" par ".env" 
  2. Générez une clé de cryptage d'application en éxecutant cett commande dans le terminal : php artisan key:generate
  3. Ouvrez le fichier .env et dans la partie reservée à la connexion DB changez: 
        - DB_CONNECTION=mysql par DB_CONNECTION=sqlite
    et supprimez les autres lignes concernant la connection à DB (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
 > Etape 03: Préparation de la base de données
  1. Dans le répertoire database créez un fichier "database.sqlite"
  2. Migration: dans le terminal exécuter cette commande : php artisan migrate
  3. Migration: dans le terminal exécuter cette commande : php artisan migrate:refresh --seed -v 
 > Etape 04: Testez l'application 
  1. dans le terminal lancez le serveur : php artisan serve
  2. ouvrez une page web et tapez URL : http://localhost:8000
 >** remarque : en cas d'erreur à cause de la bibliothéque "image intervention", il faut alors l'installer en executant dans le terminal: composer require intervention/image 
 
