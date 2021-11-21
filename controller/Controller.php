<?php
Class Controller extends BDD{

    public static function CreateView($viewName){
        if (file_exists('../View/'.$viewname.'.php')){
            require_once '../View/'.$viewname.'.php';
        }

        static::test();
    }

}