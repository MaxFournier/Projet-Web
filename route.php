<?php

Route::set('connexion', function(){
    Connexion::CreateView('connexion');
    echo '<h1>Connexion</h1>';
});

Route::set('home', function(){
    Home::CreateView('home');
    ////Home::test();
    echo '<h1>Home</h1>';
});

Route::set('serie', function(){
    //::CreateView();
});

Route::set('avancement', function(){
    //::CreateView();
});