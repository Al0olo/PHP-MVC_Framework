<?php

namespace MVC\controllers;
use MVC\core\controller;
use PDO;

class homecontroller extends controller{

    public function index(){
        $db = $this->db()->run("select * FROM user")->fetchall(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($db);die;
        $title="home index";
        $this->view("/home/index",['title'=>$title,'h1'=>"HELLO TO INDEX",'data'=>$db]);
    }

    // public function ali(){
    //     $this->view("\home\ali");
         
    //  }
}