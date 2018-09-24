Refonte leboncoin
========================

Guide permettant l'installation d'un projet Symfony concernant la refonte du bon coin..

Installation
--------------

  * composer install
  
  * php app/console doctrine:database:create
  
  * php app/console doctrine:schema:update --force
  
  * php app/console doctrine:fixtures:load --no-interaction

A ce moment, 3 utilisateurs et 3 annonnces ont été créé : 
  * anthomas / test => ROLE_ADMIN
  * auteur1 / test => ROLE_USER
  * auteur2 / test => ROLE_USER
