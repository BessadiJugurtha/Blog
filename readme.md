 # ***Projet de création d’une application web (Blog)***
![page_garde](img2/page_garde.png)
Dans le cadre d'un projet en Programmation web coté serveur on a développé un site web(Blog) en utilisant le Framework Laravel.
Ce Blog permet aux utilisateurs de consulter et écrire des postes. un utilisateur a aussi la possibilité de s'enregistrer (créer un compte), pour pouvoir devenir membre actif dans le blog.

# Conditions préalables 
Pour utiliser cette application, vous devez disposer des éléments suivants : 
* PHP version 5.5.9 minimum 
* SQLite (configurer PHP et Laravel pour connecter avec SQLite)
* Composer
* Git 

# __Commencer__ 

# __Installation__
Pour commencer à utiliser cette application il faut suivre ces étapes d'installation:
 > Etape 01: ouvrez un terminal et placez-vous dans le répertoire dans lequel voulez-vous installer l'application Exécuter et exécuter ces commandes : 
  1. git clone https://github.com/BessadiJugurtha/Blog.git
  2. composer install 
 > Etape 02: configuration du fichier .env
 Ouvrez le dossier du projet dans un éditeur de texte (SublimeTexte, Visual Studio Code)
  1. renommer le fichier ".env.example" par ".env" 
  2. Générez une clé de cryptage d'application en exécutant cette commande dans le terminal : **php artisan key:generate**
  3. Ouvrez le fichier .env et dans la partie réservée à la connexion DB changez: 
        - DB_CONNECTION=mysql par DB_CONNECTION=sqlite
        - Supprimez les autres lignes concernant la connexion à DB (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
 > Etape 03: Préparation de la base de données
  1. Dans le répertoire database créez un fichier "database.sqlite"
  2. Migration: dans le terminal exécuter cette commande : **php artisan migrate**
  3. Migration: dans le terminal exécuter cette commande : **php artisan migrate:refresh --seed -v** 
 > Etape 04: Testez l'application 
  1. dans le terminal lancez le serveur : **php artisan serve**
  2. ouvrez une page web et tapez URL : http://localhost:8000
 >** **remarque** : en cas d'erreur à cause de la bibliothèque "image intervention", il faut alors l'installer en exécutant dans le terminal: **composer require intervention/image** 

 # __Surfez et découvrez le blog__
 
 Dans cette partie vous trouverez tous ce qu'on a implémenté et le guide pour tester toutes les fonctionnalités

 > Une fois le serveur lancé, lorsque vous insérez http://localhost:8000 dans la barre d'url une page est chargée, il s'agit de **la page de garde du projet**, dans cette page on trouve une petite présentation du  projet, et les noms des collaborateurs qui ont participés à ce travail, et enfin un lien(Blog) en bas de la page qui nous oriente vers le home du blog.

 ## Home 
 > l'url de cette page [home](http://localhost:8000/home)
 dans cette partie du site (home), on a une barre de navigation contenant les bouton suivant : 
 * **Home** : dirige vers la page [Home](http://localhost:8000/home) où on peut trouver les trois derniers articles postés(selon la date d'ajout du post).
 * **Article** : dirige vers la page [Article](http://localhost:8000/article) où on peut trouver tous les articles sur deux pages  
 * **Contact** : dirige vers la page [Contact](http://localhost:8000/contact) où on peut contacter les administrateur duite
 * **Se connecter** : dirige vers la page [login](http://localhost:8000/login), dans cette page on peut s'identifier (mail et mots de passe ) ou si on le souhaite on peut créer un nouveau compte.

 ## Afficher un Article
 Dans la page [Home](http://localhost:8000/home) et [Article](http://localhost:8000/article), on peut afficher un article en cliquant sur le titre de l'article souhaité.

 > Dans la page article, on bas de page on peut cliquer sur "2" pour afficher la deuxième page d'articles, les articles sont affichés par ordre décroissant selon la date d'ajout.

 ## Connecter/Créer un compte
Depuis toutes les pages du sites (Home, Article, Contact) on peut accéder à la page login, en cliquant sur le bouton **Se Connecter** positionné sur partie droite de la barre de navigation.
Une fois dans la page login, on a deux formulaire, le premier pour s'identifier et le deuxième pour créer un compte 
Une fois connecté un bouton de déconnexion est affiché à la place du bouton "se connecter" permettant à l'utilisateur de se déconnecter depuis toutes les pages 

> **important** : En créant un compte l'utilisateur se voit attribué le rôle "User"(regardez cette attribution dans app/Http/Controllers/Auth/RegisterController), il pourra donc accéder à toutes parties du site qui exigent d'être user(comme la page contact). 

> Si l'utilisateur essaye d'accéder à la page [Contact](http://localhost:8000/contact) sans s'identifier, il sera réorienté vers la page login.

 ## Les trois derniers Contacts
 
 Dans la page article on affiche les trois derniers message envoyés, avec la date d'envoi et nom de l'utilisateur qui a envoyé le message

 >Quand en envoi un message, un message est affiché en dessous du formulaire confirmant la bonne réception du message, et ce dernier et directement affiché parmi les 3 derniers.

 ## Les Fonctionnalités 
 1. **Authentification**     
 Pour tester: essayez d'accéder à [Contact](http://localhost:8000/contact) sans s'identifier, vous allez voir que cela n'est pas possible vous serez réorienter vers la page login, car cette partie demande une authentification. identifiez-vous vous allez voir que maintenant vous avez accès à contact

 > Si vous souhaitez rendre cette partie sans authentification, commentez la ligne 15 dans app/Http/Controllers/ContactController 

 2. **Rôles**    
Deux rôles ont étaient créer (Admin et User), vous pouvez voir ça dans la table "rôles"(dans la base de données), une autre table "user_role" assure le stockage des id_user et les rôles qui leur ont étés attribués.

**Pour le rôle "User"**: chaque utilisateur qui crée un compte, le rôle "User" lui sera attribué automatiquement, pour tester ça créer un compte et regardez dans la table "user_role" vous allez voir votre "id_user" et le "id_role" du rôle qui vous a été attribué (C.A.D "User")

**Pour le rôle "Admin"**: Pour tester, j'ai créer un administrateur, se dernier est créer quand on a exécuté les seeder.
connectez vous en tant que administrateur en utilisant : 
 - email : jugurtha@gmail.com      
 - mot de passe : djigou89     
Une fois connecter vous allez voir afficher un nouveau onglet "Panneau de contrôle" dans la barre de navigation, cette page est accessible que si on est administrateur

 3. **Panneau de Contrôle**   
 en tant que Administrateur vous avez accès à cette page : il s'agit d'un tableau de bord d'administration du site, car vous pouvez gérer les rôles attribués aux users(ajouter, supprimer un rôle d'un user), et aussi supprimer  des users.

 Essayez ça: 
 - supprimez par exemple un user, et vous allez voir qu'il sera supprimé de la table user et il ne s'affichera pas dans le tableau de bord.
 - créer un compte, et regardez s'il s'ajoute au tableau de bord, une fois ajouter attribuez lui le rôle administrateur en cliquant sur la "checkbox" correspondante, maintenant cette utilisateur crée à le rôle administrateur et peut accéder à la page "panneau de contrôle"

 4. **Profil utilisateur**  
  Un utilisateur quand il est connecté, il peut accéder à son profil en cliquant sur le bouton "profil" dans la partie droite de la barre de navigation, et il peut modifier sa photo.
  
  > **important** malheureusement des fois ça marche et des fois non, on sait pas c'est quoi le problème, on a voulu aussi permettre à l'utilisateur dans cette page de modifier des information le concernant mais on a été pressés par le temps



 


