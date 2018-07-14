<?php

namespace MealOclock\Controllers;

// Je déclare mon CoreController
// Je précise que celui-ci est "abstract"
// cela signifie que cette classe ne sera pas instanciable
abstract class CoreController
{

  // Je déclare ma méthode "protected" car elle est conçue
  // pour etre appelée depuis une méthode d'une classe enfant
  // J'utilise le mot clé "final" pour interdire la redéfinition
  // de la méthode par les enfants
  final protected function displayJson($to_display)
  {
    header('Content-Type: application/json');
    echo json_encode($to_display);
  }

  final protected function show($page, $array_vars = array())
  {
    require(dirname(__DIR__).'/Views/header.php');
    require(__DIR__.'/../Views/'.$page.'.php');
    require(dirname(__DIR__).'/Views/footer.php');
  }
}
