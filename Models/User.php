<?php
class User extends Controller{
    
    public static function insertUser ($username, $password, $email)
    {
        // clean the input 
        $username = strip_tags($username);
        $password = strip_tags($password);
        $email = strip_tags($email);

        $variables = array( $username, $password, $email );
        $identifiants = array(":username",":password",":email");
        //var_dump($variables);

        self::query('INSERT INTO "users"(identifiant, password, email) 
        VALUES ( :username,:password,:email );', $variables,$identifiants);

        //echo 'done';

    }

    public static function userConnection ($username, $password)
    {
        $username = strip_tags($username);
        $password = strip_tags($password);

        $variables = array( $username, $password);
        $identifiants = array(":identifiant",":password");

        $data = self::query("SELECT * FROM users WHERE identifiant= :identifiant and password= :password", $variables, $identifiants);

        
        if ($data[0] != null && $data[0]['identifiant'] == $username 
        && $data[0]['password'] == $password){
            //var_dump($data[0]);
            return $data[0] ;//connexion ok
        }
        else{
            //var_dump($data);
            return null;//connexion failed
        }
    }

}