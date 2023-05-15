<?php

namespace App\Db;

class dbConnection{

    private static $instance = null;
    private $conn;

    private function __construct()
    {
        $this->conn = 'Im now connected to the DB[Singleton]';
    }

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new dbConnection();
        }
        return self::$instance;
    }
  
  public function getConnection()
  {
    return $this->conn;
  }

}