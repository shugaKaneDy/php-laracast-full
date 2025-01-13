<?php

// Connect to a database and execute a query.
class Database {
  
  public $connection;

  // Triggering this method automatically(automatically called when an object of that class is created)
  public function __construct() {
    $dsn = "mysql:host=localhost;dbname=myapp;";

    $this->connection = new PDO($dsn, "root");
  }

  public function query($query) {
    
    $statemnt = $this->connection->prepare($query);

    $statemnt->execute();

    return $statemnt;

  }
}