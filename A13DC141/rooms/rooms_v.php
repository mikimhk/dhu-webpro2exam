<?php 
  class RoomsView{
    private $model;
    function __construct($model){
        $this->model = $model;
    }
    function index(){
        $rooms = $this->model->getAll();
        include_once('index.php');
    }
  }
?>