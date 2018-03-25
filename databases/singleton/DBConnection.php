<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2018
 * Time: 16:28
 */
class DBConnection {

    private static $instance = null;
    private static $params = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "db" => "test"
//        "db" => "sosed.spb.ru"
    ];

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new mysqli();
//            self::$instance->connect('localhost', 'root', '', 'test');
            self::$instance->connect(self::$params["host"], self::$params["user"], self::$params["password"], self::$params["db"]);
        }
        return self::$instance;
    }

}