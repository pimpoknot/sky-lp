<?php

class ConnectionFactory
{
    private static $instance = null;

    public static function getInstance($dbConfig)
    {
        if (! self::$instance) {
            $host = $dbConfig['host'];
            $port = $dbConfig['port'];
            $dbname = $dbConfig['dbname'];
            $charset = $dbConfig['charset'];

            self::$instance = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=$charset",
                $dbConfig['user'], $dbConfig['password']);
            
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }

        return self::$instance;
    }

    public static function closeConnection()
    {
        self::$instance = null;
    }
}