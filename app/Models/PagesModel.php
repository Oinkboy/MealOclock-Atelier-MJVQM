<?php

namespace MealOclock\Models;

use MealOclock\Inc\Database;
use PDO;

class EventsModel
{
    private $id;
    private $title;
    private $target;
    private $ordering;

    public function getId()
  {
    return $this->id;
  }

    public function getTitle()
  {
    return $this->title;
  }

    public function getTarget()
  {
    return $this->target;
  }

    public function getOrdering()
    {
      return $this->ordering;
    }

    public static function findAll()
  {
    // Mise en place du SQL
    $sql = "SELECT * FROM 'pages' ORDER BY 'id' ASC;";
    // Je récupere mon objet PDO et j'applique la méthode query dessus
    // j'obtient donc un objet PDOStatement
    $pdoStatement = Database::getPDO()->query($sql);
    /* Reviens à faire */
    // $pdo = Database::getPDO();
    // $pdoStatement = $pdo->query($sql);
    return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'PageModel');
  }
}
