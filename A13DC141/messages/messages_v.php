<?php
 class MessagesView{
    private $model;
    function __construct($model){
        $this->model = $model;
    }
    function index($room_id,$room_name){
        $data_m = $this->model->getAll();
        include_once('messages.php');
    }
 }
?>