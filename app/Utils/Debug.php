<?php

namespace MealOclock\Utils;

class Debug
{
  public static function d($to_vardump)
  {
    echo '<pre>';
    var_dump($to_vardump);
    die('That\'s all folks');
  }

  public static function p($to_print)
  {
    echo '<pre>';
    print_r($to_print);
    echo '</pre>';
  }
}
