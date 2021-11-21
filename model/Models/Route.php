<?php
class Route {
    public static $validRoutes = array();

    public static function set($route, $function){
        self::$validRoutes[] = $route;

        echo '<h1>Connexion</h1>';

        if ($_GET['url'] == $route){
            $function->__invoke();
        }
    }
}