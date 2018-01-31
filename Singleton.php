<?php

// Singleton Pattern
class Database {
  public static $instance;

  public static function getInstance() {
    if (!isset(self::$instance))
      self::$instance = new Database();

    return self::$instance;
  }

  private function __construct() {}
}

$db1 = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

var_dump($db1, $db2, $db3);