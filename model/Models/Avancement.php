<?php 

class Avancement extends Controller{

    public static function test() {
        self::query("SELECT * FROM series");
    }

    public static function getAvancementById ($idSerie, $idUser){
        $variables = array ($idSerie, $idUser);

        $data = self::query("SELECT * FROM avancement WHERE id_serie = ? and id_user = ?"
        , $variables);

        return $data;
    }

    public static function deleteAvancement($idSerie, $idUser){

        $variables = array ($idSerie, $idUser);

        self::query("DELETE FROM avancement WHERE id_serie = ? and id_user = ?"
        , $variables);

    }

    public static function updateSerieFavoris ($idSerie, $idUser, $favoris){
        if($favoris!=0  && $favoris!=1 ){
            //erreur
        }
        else{
            $variables = array ($favoris,$idSerie,$idUser);

            self::query("UPDATE avancement SET favoris = ? 
            WHERE id_serie=? and id_user =?", $variables);

        }
    }

    public static function updateAvancement ($idSerie, $idUser, $favoris, $idLastEpisode){
        if($favoris!=0  && $favoris!=1 ){
            //erreur
        }
        else{
            $variables = array ($favoris,$idLastEpisode,$idSerie,$idUser);

            self::query("UPDATE avancement SET id_last_episode = ? ,favoris = ? 
            WHERE id_serie=? and id_user =?", $variables);

        }
    }

}