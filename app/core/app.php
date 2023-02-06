<?php 

namespace MVC\core;

class app{
    //properties
    private $controller;
    private $method;
    private $params;

    //constructor to start the app
    public function __construct(){
        $this->url();
        $this->render();
    }

    //function to contorl the url string
    private function url(){

        if(!empty($_SERVER["QUERY_STRING"])){
            $url=explode("/",$_SERVER["QUERY_STRING"]);
            //print_r($url);

            $this->controller=$url[0]."controller";
            //echo $this->controller;

            $this->method = isset($url[1])? $url[1] : "index";
            //echo $this->method;

            //remove the contoller and the method from the link
            unset($url[0],$url[1]);
            //print_r($url);

            //set the parameters
            $this->params = array_values($url);
            // print_r($this->params);
        }

    }

    //function to redir the values from url() to thier classes
    private function render(){
        $controllers = "MVC\controllers\\".$this->controller;
        if(class_exists($controllers)){

            if(method_exists($controllers,$this->method)){
                call_user_func_array(array(new $controllers,"$this->method"),$this->params);
                
            }

        }else{
            echo "Controller dosen't exist";
        }
    }
}