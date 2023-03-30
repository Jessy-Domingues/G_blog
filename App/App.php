<?php

namespace App;
/**
 * Va contenir une variable pour sauvgarder la connexion à la BDD
 */

class App{

    const DB_NAME = 'grafi_blog';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    private static $database;
    private static $title = 'Mon super site';

    /**
     * Initialise la connexion et stocke dans $database (singleton)
     */
    public static function getDb(){
        if(self::$database === null ){
            self::$database =  new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }

    /**
     * Fonction permettant de rediriger vers page 404
     */
    public static function notFound(){
        header("HTTP/1.0 404 Not Found");
        header('Location:index.php?p=404');
    }

    /**
     * Getter et setter du titre
     */
    public static function getTitle(){
        return self::$title;
    }

    public static function setTitle($title){
        self::$title = $title;
    }
}