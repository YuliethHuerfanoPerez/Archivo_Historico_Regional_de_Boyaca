<?php
  class Database{
    private $host;
    private $dbName;
    private $user;
    private $pass;
    public function __construct(){
      $this->host = 'bnnrakaprj68etyfgeup-mysql.services.clever-cloud.com';
      $this->dbName = 'bnnrakaprj68etyfgeup';
      $this->user = 'uzbgrzyqtao9owkh';
      $this->pass = 'SDaJjPgYPuoS5GLqSeL6';
    }
    function connection(){
      try {
        $datadb = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
        $conn = new PDO($datadb, $this->user, $this->pass);
        return $conn;
      }catch (PDOException $e) {
        die('Conexion Fallida: ' . $e->getMessage());
      }
    }
  }
  
?>