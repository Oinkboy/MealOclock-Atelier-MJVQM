<?php

use MealOclock\Application;

// Je charge mon fichier Application.php
// la fonction dirname() me retourne le nom du dossier parent du chemin donné
// http://php.net/manual/fr/function.dirname.php
// Cela m'évite simplement d'avoir à utiliser ".."
// Le résultat est le même, l'interet est principalement cosmétique !
/*
  Je ne require plus mes fichiers manuellement,
  je vais désormais utiliser l'autoloader de Composer
*/
// require(dirname(__DIR__).'/app/Application.php');
require(dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

// J'instancie ma classe Application
$myApplication = new Application();

// J'appelle la méthode run de mon objet
$myApplication->run();
