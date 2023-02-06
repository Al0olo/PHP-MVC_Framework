<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;

class homecontroller extends controller{

    public function index(){
        $user = new user();
        $db = $user->GetAllUsers();
        // echo "<pre>";
        // print_r($db);die;
        $title="home index";
        $this->view("/home/index",['title'=>$title,'h1'=>"HELLO TO INDEX",'data'=>$db]);
    }

    // public function ali(){
    //     $this->view("\home\ali");
         
    //  }
}