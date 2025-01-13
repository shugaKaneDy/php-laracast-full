<?php

// Connect to a database and execute a query.
class Database {
  
  public $connection;

  // Triggering this method automatically(automatically called when an object of that class is created)
  public function __construct($config, $username = 'root', $password = '') {
    
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};";

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query) {
    
    $statemnt = $this->connection->prepare($query);

    $statemnt->execute();

    return $statemnt;

  }
}