<?php
  include_once('messages_m.php');
  include_once('messages_v.php');

  class MessagesController{
    private $model;
    private $view;

    public function index(){
      $this->model= new MessagesModel();
      $this->view= new MessagesView($this->model);
      $this->model->all();
      $this->view->index();
    }
  }
  $controller = new MessagesController();
  $controller->index();
?>