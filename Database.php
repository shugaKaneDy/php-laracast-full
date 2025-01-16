<?php

// Connect to a database and execute a query.
class Database {
  
  public $connection;

  public $statement;

  // Triggering this method automatically(automatically called when an object of that class is created)
  public function __construct($config, $username = 'root', $password = '') {
    
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};";

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = []) {
    
    $this->statement = $this->connection->prepare($query);

    $this->statement->execute($params);

    // returning this class. also making the class of other (like PDO) our own.
    return $this;

  }

  public function get() {
    return $this->statement->fetchAll();
  }

  public function find() {

    return $this->statement->fetch();
  }

  public function findOrFail() {

    $result = $this->find();

    if (! $result) {
      abort();
    }

    return $result;

  }

  
}