<?php
class DbConnection{

    private $pdo;
    public function __construct()
    {
        $this->pdo = self::getConnection();
    }

    public static function getConnection()
    {
        try {
            $pdo = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            return $pdo; 
            
        } catch (PDOException $e) {

            echo $e->getMessage();
        
        }
      
    }
 
}


 