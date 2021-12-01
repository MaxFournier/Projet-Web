<?php
Class Controller extends BDD {

    public static function CreateView($viewName){
        
        if (file_exists('View/'.$viewName.'.html')){
            //echo 'view exists';
            require_once 'View/'.$viewName.'.html';
        }
        else{
            echo 'the view does not exist';
        }
    }

}