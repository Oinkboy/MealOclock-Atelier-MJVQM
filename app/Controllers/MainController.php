<?php

namespace MealOclock\Controllers;

class MainController extends CoreController
{

  public function home()
  {
    echo 'Bon ba, je me lance, moi la HOME !!';
  }

  public function error404()
  {
    echo 'Je suis la page d\'erreur 404 !';
  }
}
