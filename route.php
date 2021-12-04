<?php

Route::set('connexion', function(){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $data = User::userConnection($_POST['username'], $_POST['password']);

        if ($data != null){
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
        }
        else{
            $_POST['erreur'] = "failed connexion";
        }
    }
    Page::CreateView('Connexion');
    
});

Route::set('home', function(){
    $data = Serie::getFirstSerie();

    //var_dump($data);

    foreach ($data as $element ) {
        
        $element['poster'] = Serie::getSeriePoster($element['titre']);
        //var_dump($element);
    }

    $_POST['home_serie'] = $data;

    Page::CreateView('Home');
    
    //Serie::deleteSerie(4);
    //Serie::getAllSerie();
    
});

Route::set('list-series', function(){
    Page::CreateView('List-series');
});

Route::set('serie-info', function(){
    Page::CreateView('Serie-info');
});

Route::set('avancement', function(){
    Page::CreateView('avancement');
});

Route::set($_GET['url'], function(){
    //Page::CreateView("404");
});