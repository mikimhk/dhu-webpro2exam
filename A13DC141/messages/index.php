<?php
  include_once('messages_c.php');
  $controller = new MessagesController();
  $controller->index($_GET['room_id']);
?>