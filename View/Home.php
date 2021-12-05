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
        echo"home";
        var_dump($_POST['home_serie']);
        ?>
        <div class="wrapper">

            <div class="rectangle" id="affiche1"></div>
            <div class="rectangle" id="affiche1"></div>
            <div class="rectangle" id="affiche1"></div>
        </div>
        <div class="wrapper2">

            <div class="rectangle2" id="texteaffiche"></div>


        </div>

</body>

</html>