<?php

namespace MealOclock\Controllers;

class CommunityController extends CoreController
{

  public function community($url_params)
  {
    echo 'Vous souhaitez consulter la catégorie n°'.$url_params['id'];
  }

}
