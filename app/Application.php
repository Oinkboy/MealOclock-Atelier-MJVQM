<?php
### Parceque c'est notre FrontCONTROLLEEEERRR

namespace MealOclock;

// J'importe la classe AltoRouter se trouvant dans un autre namespace
use AltoRouter;

class Application
{
  private $router;

  // ma fonction __construct est une fonction dite magique
  // celle-ci est automatiquement appelée lorsque ma classe est instanciée
  // autrement dit lorsque l'on fait un new Application();
  public function __construct()
  {
    $this->router = new AltoRouter();
    $this->router->setBasePath($_SERVER['BASE_URI']);

    // J'appelle ma méthode defineRoutes qui se charge de remplir
    // notre objet AltoRouter avec nos routes
    $this->defineRoutes();
  }

  public function run()
  {

    // Je demande à AltoRouter d'essayer de "matcher" l'url actuelle
    // avec les routes precedement déclarées
    $match = $this->router->match();

    // $match peut valoir:
    //  false si aucune route ne correspond avec l'url actuelle
    //  un tableau si un correspondance (= un "match") à été trouvé

    if ($match !== false) {

      // explode permet de découper une chaine de caractères en fonction d'un délimiteur
      // list permet de regrouper un tableau dans des variables
      // Je viens donc découper ma variable $match['target'] suivant le #
      // et j'assigne les valeurs dans mes deux variables "$controllerName" et "$methodName"
      list($controllerName, $methodName) = explode('#', $match['target']);

      /* Reviens à faire:
        $target = explode('#', $match['target']);
        $controllerName = $target[0];
        $methodName = $target[1];
      */

      // Je construit le nom complet de mon controller
      // en lui ajoutant son namespace
      // (tout les controlleurs ont le même namespace)
      $controllerName = '\MealOclock\Controllers\\' . $controllerName;

      // J'instancie mon controller
      $controller = new $controllerName();

      /* La variable $controllerName va être remplacée par PHP par sa valeur
        par exemple : $controller = new MainController();
      */


      // J'appel la méthode à executer de mon controller
      $controller->$methodName($match['params']);

      /* La variable $methodName va être remplacée par PHP par sa valeur
        par exemple: $controller->home();
      */

    } else {

      $controller = new \MealOclock\Controllers\MainController();
      $controller->error404();
    }
  }

  // Je déclare une méthode privée qui va se charger de
  // déclarer à AltoRouter mes routes
  // Cette méthode est privée car seul ma classe Application
  // est ammenée à l'utiliser
  private function defineRoutes()
  {
    $this->router->map('GET', '/', 'MainController#home', 'main_show');
    $this->router->map('GET', '/community/[i:id]', 'CommunityController#community', 'community_show');
    $this->router->map('GET', '/events', 'EventsController#all', 'events_show');
  }
}
