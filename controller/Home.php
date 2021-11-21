<?php 
Class Home extends Controller{
    public static function test() {
        self::query("SELECT * FROM series");
    }
}