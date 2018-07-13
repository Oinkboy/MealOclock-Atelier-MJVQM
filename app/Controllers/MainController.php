<?php

namespace MealOclock\Controllers;

class MainController extends CoreController
{

  public function home()
  {
    require(dirname(__DIR__).'/Views/header.php');
    require(dirname(__DIR__).'/Views/home.php');
    require(dirname(__DIR__).'/Views/footer.php');
  }

  public function error404()
  {
    echo 'Je suis la page d\'erreur 404 !';
  }
}
