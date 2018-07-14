<?php

namespace MealOclock\Models;

use MealOclock\Inc\Database;
use PDO;

class EventsModel
{
    private $id;
    private $title;
    private $description;
    private $date;
    private $username;
    private $nb_of_place;
    private $adress;

    public function getId()
  {
    return $this->id;
  }

    public function getTitle()
  {
    return $this->title;
  }
    public function getDescription()
  {
    return $this->description;
  }
    public function getDate()
  {
    return $this->date;
  }
    public function getUsername()
  {
    return $this->username;
  }
    public function getNbOfPlace()
  {
    return $this->nb_of_place;
  }
    public function getAdress()
  {
    return $this->adress;
  }

    public static function findAll()
  {
    // Mise en place du SQL
    $sql = "SELECT * FROM `events` ORDER BY `events`.`date` DESC";

    // Je récupere mon objet PDO et j'applique la méthode query dessus
    // j'obtient donc un objet PDOStatement
    $pdoStatement = Database::getPDO()->query($sql);
    /* Reviens à faire */
    // $pdo = Database::getPDO();
    // $pdoStatement = $pdo->query($sql);
    return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'MealOclock\Models\EventsModel');
  }
}
