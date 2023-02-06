<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database as Database; // include pdo-wrapper

class controller{

    public function view($path,$param){
        extract($param);
        require_once(VIEWS.$path.".php");
    }
    //database connection
    public function db(){
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