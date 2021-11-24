<?php 

class Episode extends Controller{
    
    public static function insertSerie ($titre,$description,$nbSaison){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $nbSaison = strip_tags($nbSaison);

        $variables = array($titre, $description, $nbSaison);

        self::query('INSERT INTO "series"(titre, description, nb$nbSaison) 
        VALUES (?, ?, ?);', $variables);
    }

    public static function getAllSerie(){
       
        $data = self::query("SELECT * FROM series");
        return $data;
    }

    public static function getFirstSerie(){
       
        $data = self::query("SELECT * FROM series LIMIT 3");
        return $data;
    }

    public static function getSerieById($id){

        $variables = $id;

        $data = self::query("SELECT * FROM series WHERE id=?", $variables);

        return $data;
    }

    public static function updateSerie($id, $titre, $description, $nbSaison){
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $nbSaison = strip_tags($nbSaison);

        $variables = array($titre, $description, $nbSaison,$id);

        self::query("UPDATE series SET titre = ?, description = ?, nb_saison = ? WHERE id=?"
        , $variables);

    }

    public static function deleteSerie($id){
        $variables = $id;

        $data = self::query("SELECT * FROM series WHERE id_serie=?", $variables);
    }

    //ajouter get affiche par api 
}