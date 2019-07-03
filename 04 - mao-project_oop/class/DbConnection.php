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
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo; 
            
        } catch (PDOException $e) {

            echo $e->getMessage();
        
        }
      
    }
 
}


 