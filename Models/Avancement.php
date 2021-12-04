<?php 

class Avancement extends Controller{

    public static function test() {
        self::query("SELECT * FROM series");
    }

    public static function getLastSeen ($idSerie, $idUser){
        $variables = array ($idSerie, $idUser);
        $identifiants = array(":ids",":idu");

        $data = self::query("SELECT * FROM avancement WHERE id_serie = :ids and id_user = :idu"
        , $variables);

        return $data;
    }

    public static function getFavorites ($idUser){
        $variables = array ($idUser);
        $identifiants = array(":idu");

        $data = self::query("SELECT id_serie FROM avancement WHERE id_user = :idu and favoris = 1" 
        , $variables);

        return $data;
    }

    public static function getSeenSerie ($idUser){
        $variables = array ($idUser);
        $identifiants = array(":idu");

        $data = self::query("SELECT id_serie FROM avancement WHERE id_user = :idu " 
        , $variables);

        return $data;
    }

    public static function deleteAvancement($idSerie, $idUser){

        $variables = array ($idSerie, $idUser);
        $identifiants = array(":ids",":idu");

        self::query("DELETE FROM avancement id_serie = :ids and id_user = :idu"
        , $variables);

    }

    public static function updateFavorite ($idSerie, $idUser, $favoris){
        if($favoris!=0  && $favoris!=1 ){
            //erreur
        }
        else{
            $variables = array ($favoris,$idSerie,$idUser);
            $identifiants = array(":fav",":ids",":idu");

            self::query("UPDATE avancement SET favoris = :fav 
            WHERE id_serie = :ids and id_user = :idu", $variables);

        }
    }

    public static function updateLastSeen ($idSerie, $idUser, $favoris, $idLastEpisode){
        if($favoris!=0  && $favoris!=1 ){
            //erreur
        }
        else{
            $variables = array ($idLastEpisode,$favoris,$idSerie,$idUser);
            $identifiants = array(":idlastep",":fav",":ids",":idu");

            self::query("UPDATE avancement SET id_last_episode = :idlastep ,favoris = :fav 
            WHERE id_serie= :ids and id_user =:idu", $variables);

        }
    }


}