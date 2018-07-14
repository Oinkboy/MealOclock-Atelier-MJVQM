<?php

namespace MealOclock\Controllers;

use MealOclock\Models\PagesModel;

class MainController extends CoreController
{

  public function error404()
  {
    echo 'Je suis la page d\'erreur 404 !';
  }

   public function home()
  {
    $array_vars_view = [];
    $array_vars_view['array_pagesModel'] = PagesModel::findAll();
    $this->show('home', $array_vars_view);
  }


}
