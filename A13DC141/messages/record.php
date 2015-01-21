<?php
ini_set('display_errors', 1);
include_once('messages_c.php');
$controller = new MessagesController();
$controller->save($_POST['room_id'], $_POST['content']);
header("Location: ./index.php?room_id=".$_POST['room_id']);
exit();
?>