<?php 

class User{

    public $nama = "Ardian Pratama";
    public $umur = "22";
    public $_db;

    public function __construct(){
        $this->_db = Database::getInstance();
    }

    public function index(){
        return $this->_db->index("users");
    }
}

; ?>