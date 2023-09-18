<?php
class Singleton {
    private static $single = null;

    private function __construct() {
        echo "hi..everyone..";
    }

    public static function mySingleton() {
        if (self::$single == null) {
            self::$single = new static();
        } else {
            echo "already connected";
        }
        return self::$single;
    }
}

$obj = Singleton::mySingleton();


