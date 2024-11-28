<?php

namespace App\Lib;

use mysqli;

class Database
{
    private static $connection;

    public static function init($config) {
        self::$connection = new mysqli(
            $config['host'],
            $config['user'],
            $config['password'],
            $config['dbname']
        );

        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }

        self::$connection->set_charset("utf8");
    }

    public static function getConnection() {
        return self::$connection;
    }
}