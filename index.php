<?php
require_once 'config/config.php';

echo $_GET['url'];

function __autoload($className){
    echo $className;
    if (file_exists('model/Models/'.$className.'.php')){
        require_once 'model/Models/'.$className.'.php';
        echo 'model';
    }
    else if (file_exists('controller/'.$className.'.php')){
        require_once 'controller/'.$className.'.php';
        echo 'controller';
    }
    
}