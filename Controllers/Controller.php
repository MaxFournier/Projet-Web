<?php
Class Controller extends BDD {

    public static function CreateView($viewName){
        
        if (file_exists('View/'.$viewName.'.php')){
            //echo 'view exists';
            require_once 'View/'.$viewName.'.php';
        }
        else{
            echo 'the view does not exist';
        }
    }

}