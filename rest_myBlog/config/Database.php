<?php


class Database{

  // specify your own database credentials
  private $host = "localhost";
  private $db_name = "my_blog";
  private $username = "tom";
  private $password = "123";
  public $conn;

  // get the database connection
  public function connect(){

      $this->conn = null;

      try{
          $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $exception){
          echo "Connection error: " . $exception->getMessage();
      }

      return $this->conn;
  }
}