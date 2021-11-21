<?php 
class BDD{
    
    
    private static function connect() {
        // connexion sqlite voir variable dans config.php
        $pdo = new PDO("DB_TYPE:DB_NAME");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } 

    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if(explode(' ','query')[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
        }
    }
}