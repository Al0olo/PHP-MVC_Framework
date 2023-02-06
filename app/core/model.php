<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database; // include pdo-wrapper

class model{
    //database connection
    static public function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'portfolio',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        return $db = new Database($options);
    }
}
