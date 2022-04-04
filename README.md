
Projet en groupe - Temps estimés : 15 jours
Technologies, outils et concept travaillés : HTML / CSS, PHP, POO, MVC, AltoRouter,
Réécritures d'url, Serveur web local, IDE, PhpMyAdmin, Mysql, Git, Composer, SASS, twig
Description du projet
-------------------------------------------------------------------------------------

Vous allez devoir créer un site de petites-annonces qui n’utilise pas de logins et de mots de passe
pour créer une annonce. Concrètement le site doit afficher les annonces créées et permettre
d’ajouter une annonce avec une simple adresse courriel.

Lors de la création d’une nouvelle annonce par un utilisateur anonyme celui-ci va recevoir un
courriel permettant de valider son annonce s’il clique sur un lien, dans ce même courriel un autre
lien lui permettra de modifier son annonce visuellement avant de la valider. Une fois celle-ci
validée il recevra un courriel de confirmation comme quoi l’annonce a bien été mise en ligne et
aura dans ce même courriel la possibilité de la supprimer. Vous devez mettre en place des
messages de confirmation lors de la validation et lors de la suppression.

Vous devez penser à la sécurité de l’application : en effet les nouvelles annonces ne doivent pas
être modifiable sans le lien. grâce à un identifiant unique pour chaque annonce qui vous permettra
de la récupérer pour afficher le formulaire de modification.

La page d’accueil doit lister les 10 premières annonces du site et permettre d’afficher les
suivantes 10 par 10. 

Lorsque l’on clique sur une annonce afin de la visualiser plus précisément, celle doit afficher un
lien permettant de la télécharger au format pdf.

Vous devez afficher une image par défaut dans le cas où l’utilisateur n’ait pas ajouté d’image a
son annonce. Lors de la création de l’annonce ne pas ajouter d’image ne doit être pas bloquant
pour l’utilisateur.



---------------------------------------------------------------------------------




Les ++++++


1. Tâche cron qui supprime les annonces qui sont en attente de publication à n+2 jours de
la date de création. Envoyer un courriel à la personne de la suppression de son annonce
en attente.

2. Tâche cron qui supprime les annonces qui sont publiées à n+15 jours de la date de
création. Envoyer un mail à la personne de la suppression de son annonce



3. Créer un infinite-scroll pour la pagination des annonces


Les étapes :
-Créer le MCD ensemble et confirmer votre MCD par votre coach
-Créer le MLD ensemble et confirmer votre MLD par votre coach
-Créer le modèle Physique de données ensemble et confirmer votre Modèle Physique par
votre coach
-Installer Composer sous Windows ensemble
-Installer vos dépendances PHP : AltoRouter, Twig, MJML, MJML-PHP, mPDF ensemble
-Installer nodejs et npm ou yarn ensemble
-Installer vos dépendances front : sass ensemble
-Définir l'arborescence de vos dossiers ensemble et confirmer par votre coach
-Mettre en place le .gitignore ensemble et confirmer votre coach
-Avec Composer générer l'Autoload (PSR-4) ensemble
-Définir les routes nécessaire à votre projet
-Mettre en place le Router et ajouter vos routes
-Créer les contrôleurs et méthodes nécessaire à vos routes ensemble et confirmer par le
coach
-Pour la partie back :
Créer les modèles
Pour chaque méthodes définir les variables nécessaires à la vue
-Pour la partie front
Réaliser les wireframe de toutes vos pages et emails
Réaliser les vues nécessaires pour vos différentes pages
Réaliser le MJML de vos mails
Réaliser le code pour générer le PDF
Réaliser le CSS et responsive


Durant toutes les étapes Essayer par vous-même

-Fais un point régulier avec les autres apprenants participant au projet
-Faites un Trello de vos différentes tâches
-Vous êtes en difficultés ? Demandez à un apprenant de votre groupe de vous expliquer les
bases
-Tu as compris ? Prends le temps d'aider un autre apprenant
-Tu as fini ? Ajoute des fonctionnalités
-Tout le long du projet versionne ton projet


-----------------------------------------------------------------------------------------------

Ressources :

-Installer composer sous windows
-composer guide : Ajouter une dépendance
-composer Autoload  PSR-4
-nodejs
-yarn
-Exemple d'une structure des dossiers en mvc
-.gitignore exemple
-SASS
-Altorouter
-Altorouter exemple mapping
-MJML
-MJML exemple de base
-MJML-php
-Twig pour développeurs
-Twig pour les concepteurs4
-MPDF


Notes pour le formateur
Activité du matin

-Définition du MVC
-Définition du Routeur
-PHP - Variable serveur REQUEST_URI
-Expressions régulières
-Espace de nom en php
-POO - Classe
-POO - Méthodes et propriétés
-POO - Portée de variables et des méthodes
-POO - Classes étendues
-Apache - Alias et documentRoot
-Webpack - SASS
-Webpack - JS
-Webpack - Images
-Composer réinstaller des dépendances
-PHP - Variable serveur REQUEST_METHOD
