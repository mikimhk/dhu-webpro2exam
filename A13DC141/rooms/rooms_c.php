<?php
include_once('rooms_v.php');
include_once('rooms_m.php');

class RoomsController{
  private $model;
  private $view;

  public function index(){
    $this->model= new RoomsModel();
    $this->view= new RoomsView($this->model);
    $this->model->all();
    $this->view->index();
  }
}

$controller = new RoomsController();
$controller->index();

?>