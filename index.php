<?php
require_once 'config/config.php';
require_once 'route.php';



//var_dump( $_GET);

function __autoload($className){
    
    if (file_exists('Controllers/'.$className.'.php')){

        require_once 'Controllers/'.$className.'.php';
        
    }
    else if (file_exists('Models/'.$className.'.php')){
        require_once 'Models/'.$className.'.php';
        
        
    }
    
}