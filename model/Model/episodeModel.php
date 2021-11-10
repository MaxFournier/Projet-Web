<?php
Class EpisodeModel{
    function __construct($db) {
        try {
            $this->pdo = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    function insertEpisode ($titre,$description,$saison,$numero,$idSerie){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $saison = strip_tags($saison);
        $numero = strip_tags($numero);
        $idSerie = strip_tags($idSerie);

        $sql = $db->query('INSERT INTO "episodes"(titre, description, saison, numero, id_serie) 
        VALUES (?, ?, ?, ?, ?);');

        $stmt= $pdo->prepare($sql);
        $stmt->execute([$titre, $description, $saison,$numero,$idSerie]);

    }

    function getEpisodeById($id){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]); 
        $row = $stmt->fetch();

        return $row;
    }

    function updateEpisode($id, $titre, $description, $saison ,$numero,$idSerie){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $saison = strip_tags($saison);
        $numero = strip_tags($numero);
        $idSerie = strip_tags($idSerie);
        
        $stmt = $pdo->prepare("UPDATE episodes SET titre = ?, 
        description = ?, saison = ?, numero = ?, id_serie = ? WHERE id=?");
        $stmt->execute([$titre, $description, $saison ,$numero,$idSerie, $id]); 

    }

    function deleteEpisode($id){
        $sql = "DELETE FROM episodes WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    function isEpisodeOfSerie ($idEpisode, $idSerie){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id_serie=?");
        $stmt->execute([$idSerie]); 
        $row = $stmt->fetchAll();

        foreach ($row as $element) {
            if($element['id'] == $idEpisode){
                return true;
            }
            return false;
        }
    }
}