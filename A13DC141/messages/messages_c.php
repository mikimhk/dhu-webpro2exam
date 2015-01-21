<?php
  include_once('messages_m.php');
  include_once('messages_v.php');
  include_once('../rooms/rooms_m.php');

  class MessagesController{
    private $model;
    private $view;

    public function index($room_id,$room_name){
      $this->model= new MessagesModel();
      $this->view= new MessagesView($this->model);
      $this->model->all($room_id);
      $this->view->index($room_id,$room_name);
    }
    public function save($room_id, $content){
      $this->model= new MessagesModel(); 
      $this->model->saveMessage($room_id, $content);
    }
    private function setRoomName(){
        $rooms = new Rooms();
        $rooms->setData();
        $this->room_name = $rooms->getName($this->room_id);
    }
  }
?>