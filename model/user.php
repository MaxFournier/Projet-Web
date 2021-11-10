<?php
	class User
{
    public $id;
    public $username;
    public $password;
    public $mail;

    public function __construct()
    {

    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }

    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getMail(){
        return $this->mail;
    }
    
}
?>