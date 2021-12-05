<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <style>
        <?php
            include "styles/style2.css" ;
        ?>
    </style>
        <link rel="stylesheet" href="styles/style2.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="Connexion" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                    if(isset($_POST['erreur'])){
                        $err = $_POST['erreur'];
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                ?>
            </form>
        </div>
    </body>
</html>