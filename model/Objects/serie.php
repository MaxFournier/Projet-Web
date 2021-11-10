<?php
	class Serie
{
    public $id;
    public $titre;
    public $description;
    public $nbsaison;

    public function __construct()
    {  }

    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setNbsaison($nbsaison){
        $this->nbsaison = $nbsaison;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getNbsaison(){
        return $this->nbsaison;
    }
}
?>