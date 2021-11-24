<?php

Route::set('connexion', function(){
    Connexion::CreateView('Connexion');
    //echo '<h1>Connexion</h1>';
});

Route::set('home', function(){
    //echo 'Home ROute';
    Home::CreateView('Accueil');
    //User::insertUser('testuser','testuser','test@user');
    //User::userConnection('testuser','testuser');
    
});

Route::set('serie', function(){
    //::CreateView();
});

Route::set('avancement', function(){
    //::CreateView();
});