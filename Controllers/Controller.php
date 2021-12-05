<?php
Class Controller extends BDD {

    public static function CreateView($viewName){
        
        if (file_exists('View/'.$viewName.'.php')){
            //echo 'view exists';
            include 'View/'.$viewName.'.php';
        }
        else{
            echo 'the view does not exist';
        }
    }

    public static function CreateView404($viewName){
        
        if (!file_exists('View/'.$viewName.'.php')){
            echo "here";
            include 'View/404.php';
        }
    }

}