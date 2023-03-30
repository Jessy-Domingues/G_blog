<?php

namespace App;

class Config{

    private $settings = [];
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    public function __construc(){
        $this->settings = require dirname(__DIR__) . '/config/config.php';
    }

}