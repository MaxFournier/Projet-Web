<?php 
class BDD{
    
    
    private static function connect() {
        // connexion sqlite voir variable dans config.php
        echo ' - start connect - ';
        echo ''.DB_TYPE.':'.DB_NAME.'';
        $pdo = new PDO(''.DB_TYPE.':'.DB_NAME.'');
       
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } 

    public static function query($query, $params = array()){
        echo ' - start query';
        $statement = self::connect()->prepare($query);
        //var_dump($statement);
        //var_dump($params);
        //echo ' - connect';
        $statement->execute($params);
        //var_dump($statement);
        //var_dump(explode(' ',$query));
        if(explode(' ',$query)[0] == 'SELECT'){
            echo 'here';
            $data = $statement->fetchAll();
            var_dump($data);
            return $data;
        }
    }
}