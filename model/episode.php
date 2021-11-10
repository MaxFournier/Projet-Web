<?php
	class Episode
{
    public $id;
    public $titre;
    public $description;
    public $serie;
    public $saison;
    public $numero;

    public function __construct()
    {
        
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setSerie($serie){
        $this->serie = $serie;
    }
    public function setSaison($nbsaison){
        $this->saison = $Saison;
    }
    public function setNumero($numero){
        $this->numero = $numero;
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
    public function getSerie(){
        return $this->serie;
    }
    public function getSaison(){
        return $this->saison;
    }
    public function getNumero(){
        return $this->numero;
    }
}
?>