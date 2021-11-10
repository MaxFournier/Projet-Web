<?php
	class Avancement
{
    public $user;
    public $serie;
    public $favoris;
    public $lastepisode;

    public function __construct()
    {    }
   
    public function setUser($user){
        $this->user = $user;
    }
    public function setSerie($serie){
        $this->serie = $serie;
    }
    public function setFavoris($favoris){
        $this->favoris = $favoris;
    }
    public function setLastEpisode($lastEpisode){
        $this->lastEpisode = $lastEpisode;
    }


    public function getUser(){
        return $this->user;
    }
    public function getSerie(){
        return $this->serie;
    }
    public function getFavoris(){
        return $this->favoris;
    }
    public function getLastEpisode(){
        return $this->lastEpisode;
    }

}
?>