<?php
Class UserModel extends BDD{
    function __construct($db) {
        try {
            $this->pdo = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    function insertUser ($username, $password, $email)
    {
        // clean the input 
        $username = strip_tags($username);
        $password = strip_tags($password);
        $email = strip_tags($email);

        $sql = $pdo->query('INSERT INTO "users"(identifiant, password, email) 
        VALUES (?, ?, ?);');

        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $password, $email]);

    }

    function userConnection ($username, $password)
    {
        $username = strip_tags($username);
        $password = strip_tags($password);

        $stmt = $pdo->prepare("SELECT * FROM users WHERE identifiant=? 
        and password=?");
        $stmt->execute([$username, $password]); 
        $row = $stmt->fetch();
        if ($row != null && $row['identifiant'] == $username 
        && $row['password'] == $password){
            return $row ;//connexion ok
        }
        else{
            return null;//connexion failed
        }
    }
}