<?php 
class BDD{
    
    
    private static function connect() {
        // connexion sqlite voir variable dans config.php
        echo ' - start connect - ';
        echo ''.DB_TYPE.':'.DB_NAME.'';
        $pdo = new PDO(''.DB_TYPE.':'.DB_NAME.'');

        if ($pdo !=null){
            echo "here";
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "there";
            return $pdo;
        }
       else {
           echo "Oups quelque chose s'est mal passé a la création du pdo";
       }
        
    } 

    public static function query($query, $params = array(), $identifiants = array()){
        echo ' - start query';
        echo $query;
        $statement = self::connect()->prepare($query);
        var_dump($statement);
        var_dump($params);
        echo ' - connect';
        $i =0;

        foreach($params as $element){
            echo $identifiants[$i];
            echo $element;
            $statement->bindParam($identifiants[$i], $element);
            $i++;
        }
        var_dump($statement);
        $statement->execute();
        var_dump($statement);
        
        if(explode(' ',$query)[0] == 'SELECT'){
            //echo 'here';
            $data = $statement->fetchAll();
            var_dump($data);
            return $data;
        }
    }
}