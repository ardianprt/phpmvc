<?php 

class Controller{
    public function view($view,$data=[]){
        require_once("../app/Views/".$view.".php");
    }
    public function model($data){
        require_once("../app/Model/".$data.".php");
        return new $data();
    }
}

; ?>