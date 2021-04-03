<?php 

class HomeController extends Controller{
    public function index(){
        $model = $this->model('User');
        return $this->view('home',["user"=>$model->index()]);
    }
    public function tes($param1){
        return $this->view($param1);
    }
}

; ?>