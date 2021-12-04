<?php
class Route {
    public static $validRoutes = array();

    public static function set($route, $function){
        self::$validRoutes[] = $route;

        //var_dump(self::$validRoutes);

        if ($_GET['url'] == $route){
            $function->__invoke();
        }
    }
}