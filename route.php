<?php

Route::set('Connexion', function(){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $data = User::userConnection($_POST['username'], $_POST['password']);
        var_dump($data);
        if ($data != null){
            session_start();
            echo "session start";

            $_SESSION['id'] = $data['id'];
            echo $data['id'];
            echo $_SESSION['id'];
            $_SESSION['username'] = $data['identifiant'];

            var_dump($_SESSION);

            header('Location: List-series');
        }
        else{
            $_POST['erreur'] = "failed connexion";
        }
    }
    Page::CreateView('Connexion');
    
});

Route::set('Home', function(){
    $data = Serie::getFirstSerie();

    //var_dump($data);

    for ($i = 0; $i < count($data) ; $i++ ) {
        
        $data[$i]['poster'] = Serie::getSeriePoster($data[$i]['titre']);
        //var_dump($data[$i]);
    }

    $_POST['home_serie'] = $data;

    Page::CreateView('Home');
    
    //Serie::deleteSerie(4);
    //Serie::getAllSerie();
    
});

Route::set('List-series', function(){
    //if (isset($_SESSION['id']) && isset($_SESSION['username']))
    //{
        $data = Serie::getAllSerie();

        $seen = Avancement::getSeenSerie(1);

        $fav = Avancement::getFavorites(1);

        for ($i = 0; $i < count($data) ; $i++ ) {
            
            $data[$i]['poster'] = Serie::getSeriePoster($data[$i]['titre']);

            if (in_array($data[$i]['id'], $seen)){
                
                $data[$i]['seen'] = true;

                if (in_array($data[$i]['id'], $fav)){
                    $data[$i]['favorite'] = true;
                }
            }

        }

        $_POST['list_serie'] = $data;


        Page::CreateView('List-series');
    // }
    // else{
    //     header('Location: Home');
    // }
});

Route::set('Serie-info', function(){
    // if (isset($_SESSION['id']) && isset($_SESSION['username']))
    // {
        

        Page::CreateView('Serie-info');
    // }
    // else{
    //     header('Location: Home');
    // }
});

Route::set('Avancement', function(){
    // if (isset($_SESSION['id']) && isset($_SESSION['username']))
    // {
        Page::CreateView('Avancement');
    // }
    // else{
    //     header('Location: Home');
    // }
});

Route::set($_GET['url'], function(){
    if (!isset($_GET['url'])){
        header('Location: Home');
    }
    else {
        Page::CreateView404($_GET['url']);
    }
});