<?php
 class MessagesView{
    private $model;
    function __construct($model){
        $this->model = $model;
    }
    function index(){
        $data_m = $this->model->getAll();
        include_once('index.php');
    }
 }
?>