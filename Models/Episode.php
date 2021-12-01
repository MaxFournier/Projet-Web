<?php 

class Episode extends Controller{
    public static function insertEpisode ($titre,$description,$saison,$numero,$idSerie){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $saison = strip_tags($saison);
        $numero = strip_tags($numero);
        $idSerie = strip_tags($idSerie);

        $variables = array($titre, $description, $saison,$numero,$idSerie);
        $identifiants = array( ":titre", ":description", ":saison", ":numero", ":idSerie");

        self::query("INSERT INTO 'episodes'(titre, description, saison, numero, id_serie) 
        VALUES ( :titre, :description, :saison, :numero, :idSerie);", $variables,$identifiants);
    }

    public static function getEpisodeById($id){
        $variables = array($id);
        $identifiants = array(":id");

        $data = self::query("SELECT * FROM episodes WHERE id= :id", $variables,$identifiants);

        return $data;
    }

    public static function updateEpisode($id, $titre, $description, $saison ,$numero,$idSerie){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $saison = strip_tags($saison);
        $numero = strip_tags($numero);
        $idSerie = strip_tags($idSerie);

        $variables = array($titre, $description, $saison ,$numero,$idSerie, $id);
        $identifiants =array(";titre", ":description", ":saison" ,":numero", ":idSerie", ":id");
        
        self::query("UPDATE episodes SET titre = :titre, description = :description, saison = :saison, 
        numero = :numero, id_serie = :idSerie WHERE id= :id", $variables,$identifiants);
    }

    public static function deleteEpisode($id){
        $variables = array($id);
        $identifiants = array(":id");

        self::query("DELETE FROM episodes WHERE id= :id", $variables,$identifiants);

    }

    public static function isEpisodeOfSerie ($idEpisode, $idSerie){
        $variables = array($idSerie);
        $identifiants = array(":id");

        $data = self::query("SELECT * FROM episodes WHERE id_serie= :id", $variables,$identifiants);

        foreach ($data as $element) {
            if($element['id'] == $idEpisode){
                return true;
            }
            return false;
        }
    }

    public static function getEpisodesBySerieId ($idSerie){

        $variables = array($idSerie);
        $identifiants = array(":id");

        $data = self::query("SELECT * FROM episodes WHERE id_serie= :id", $variables ,$identifiants);

        return $data;
    }
}