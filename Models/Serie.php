<?php 

class Serie extends Controller{
    
    public static function insertSerie ($titre,$description,$nbSaison){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $nbSaison = strip_tags($nbSaison);

        $variables = array($titre, $description, $nbSaison);
        $identifiants = array(":titre",":description",":nbsaison");

        self::query('INSERT INTO "series"(titre, description, nb_saison) 
        VALUES ( :titre , :description , :nbsaison );', $variables,$identifiants);
    }

    public static function getAllSerie (){
        $data = self::query("SELECT * FROM series");
        return $data;
    }

    public static function getFirstSerie(){
       
        $data = self::query("SELECT * FROM series LIMIT 3");
        return $data;
    }

    public static function getSerieById($id){
        $sql = "SELECT * FROM series WHERE id= :id";
        
        $variables = array($id);

        $identifiants = array(":id");

        $data = self::query($sql, $variables, $identifiants);

        return $data;
    }

    public static function updateSerie($id, $titre, $description, $nbSaison){
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $nbSaison = strip_tags($nbSaison);

        $variables = array($titre, $description, $nbSaison,$id);
        $identifiants =array(":titre", ":description", ":nbSaison",":id");

        self::query("UPDATE series SET titre = :titre, description = :description, nb_saison = :nbsaison WHERE id= :id"
        , $variables, $identifiants);

    }

    public static function deleteSerie($id){
        $variables = array($id);
        $identifiants = array(":id");

        $data = self::query("DELETE FROM series WHERE id = :id ;", $variables, $identifiants);
    }

    //ajouter get affiche par api 
}