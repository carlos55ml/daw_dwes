<?php
class DB {
  private $mysqlConnectionString = "mysql:dbname=base_carlos;host=127.0.0.1";
  private $mysqlUser = "carlos";
  private $mysqlPass = "carlitro";
  private $db = null;

  function __construct() {
    $this->connect();
  }

  function connect() {
    try {
      $this->db = new PDO($this->mysqlConnectionString, $this->mysqlUser, $this->mysqlPass);
    } catch (PDOException $ex) {
      echo "Error en la conexion " . $ex->getMessage();
    }
  }

  function query(string $query) {
    if (is_null($this->db)) {
      echo "<br>Error: DB not connected.";
      return null;
    }
    try {
      $result = $this->db->query($query);
      return $result;
    } catch (PDOException $ex) {
      echo "Error en la query $ex->getMessage()";
      return null;
    }
  }
}
