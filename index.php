<?php
require_once 'config/config.php';
require_once 'route.php';


//echo $_GET['url'];

function __autoload($className){
    //echo $className;
    if (file_exists('Controllers/'.$className.'.php')){

        echo ''.$className.' - ';
        require_once 'Controllers/'.$className.'.php';
        
        //echo 'controller';
    }
    else if (file_exists('Models/'.$className.'.php')){
        require_once 'Models/'.$className.'.php';
        echo ''.$className.' - ';
        //echo 'model';
    }
    
}