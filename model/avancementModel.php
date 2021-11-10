<?php
class AvancementModel extends BDD
{

    function __construct($db) {
        try {
            $this->pdo = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    function insertAvancement($id_user, $id_serie, $favorite, $id_episode){
        //verifier si user,serie et episode existe + si episode = episode de la series
    }

    function getAvancementById ($idUser, $idSerie){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id_serie = ? and id_user = ?");
        $stmt->execute([$idSerie,$idUser]); 
        $row = $stmt->fetch();

        return $row;
    }

    function deleteAvancement($idUser, $idSerie){
        $sql = "DELETE FROM episodes WHERE id_serie = ? and id_user = ?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$idSerie,$idUser]);
    }

    //ajouter fonction "ajouter au favoris
}