<?php
class User {
    public static function insertUser ($username, $password, $email)
    {
        // clean the input 
        $username = strip_tags($username);
        $password = strip_tags($password);
        $email = strip_tags($email);

        $variables = array( $username, $password, $email );

        self::query('INSERT INTO "users"(identifiant, password, email) 
        VALUES (?, ?, ?);', $variables);

    }

    public static function userConnection ($username, $password)
    {
        $username = strip_tags($username);
        $password = strip_tags($password);

        $variables = array( $username, $password);

        $data = self::query("SELECT * FROM users WHERE identifiant=? and password=?", $variables);

        
        if ($data[0] != null && $data[0]['identifiant'] == $username 
        && $data[0]['password'] == $password){
            return $data[0] ;//connexion ok
        }
        else{
            return null;//connexion failed
        }
    }

}