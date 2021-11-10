<?php
Class SerieModel extends BDD{
    function __construct($db) {
        try {
            $this->pdo = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    function insertSerie ($titre,$description,$nbSaison){
        // clean the input 
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $nbSaison = strip_tags($nbSaison);

        $sql = $db->query('INSERT INTO "series"(titre, description, nb$nbSaison) 
        VALUES (?, ?, ?);');

        $stmt= $pdo->prepare($sql);
        $stmt->execute([$titre, $description, $nbSaison]);

    }

    function getSerieById($id){
        $stmt = $pdo->prepare("SELECT * FROM series WHERE id=?");
        $stmt->execute([$id]); 
        $row = $stmt->fetch();

        return $row;
    }

    //get 3 serie pour page d'accueil
    function get3Series($id){
        $stmt = $pdo->prepare("SELECT * FROM series LIMIT 3");
        $stmt->execute([$id]); 
        $rows = $stmt->fetchAll();

        return $rows;
    }

    function updateSerie($id, $titre, $description, $nbSaison){
        $titre = strip_tags($titre);
        $description = strip_tags($description);
        $nbSaison = strip_tags($nbSaison);
        
        $stmt = $pdo->prepare("UPDATE series SET titre = ?, 
        description = ?, nb_saison = ? WHERE id=?");
        $stmt->execute([$titre, $description, $nbSaison,$id]); 

    }

    function deleteSerie($id){
        $sql = "DELETE FROM series WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    //ajouter get affiche par api 
}