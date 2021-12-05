<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="" />
    <title>Serie suivie</title>
    <style>
        <?php
            include "styles/style.css" ;
        ?>
    </style>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <h1>HOME</h1>
    <article class="Séries">
        <a id="connexion" href="Connexion">Connexion</a>
        <h2>Séries à la une</h2>
        <?php
        $series = $_POST['home_serie'];

        ?>
        <div class="wrapper">
            <?php
                foreach($series as $element){
            ?>
            <div class="rectangle" id="affiche1">
                <?php
                    echo ' <h2>'.$element['titre'].' </h2>';
                    echo ' <img src="'.$element['poster'].'"/> ';
                  
                ?>
            </div>
            <?php
                }
            ?>
            
        </div>
       

</body>

</html>