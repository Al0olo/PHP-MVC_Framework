<?php

namespace MVC\models;
use MVC\core\model;
use PDO;

class user extends model{
    public function GetAllUsers(){
        $data = model::db()->run("select * FROM user")->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
}