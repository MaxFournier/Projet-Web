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

        self::query("INSERT INTO 'episodes'(titre, description, saison, numero, id_serie) 
        VALUES (?, ?, ?, ?, ?);", $variables);
    }

    public static function getEpisodeById($id){
        $variables = $id;

        $data = self::query("SELECT * FROM episodes WHERE id=?", $variables);

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
        
        self::query("UPDATE episodes SET titre = ?, description = ?, saison = ?, 
        numero = ?, id_serie = ? WHERE id=?", $variables);
    }

    public static function deleteEpisode($id){
        $variables = $id;

        self::query("DELETE FROM episodes WHERE id=?", $variables);

    }

    public static function isEpisodeOfSerie ($idEpisode, $idSerie){
        $variables = array($idEpisode, $idSerie);

        $data = self::query("SELECT * FROM episodes WHERE id_serie=?", $variables);

        foreach ($data as $element) {
            if($element['id'] == $idEpisode){
                return true;
            }
            return false;
        }
    }

    public static function getEpisodesBySerieId ($idSerie){

        $variables = $idSerie;

        $data = self::query("SELECT * FROM episodes WHERE id_serie=?", $variables);

        return $data;
    }
}