<?php
    $pdo = new PDO('sqlite:database.db');

    $statement = $pdo->query("SELECT * FROM users");

    $row = $statement->fetchAll(PDO::FETCH_ASSOC);

    //row = arry with data
?>