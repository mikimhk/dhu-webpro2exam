<?php
 class MessagesModel{
  private $data_m;
  private $room_id;

  public function all($room_id){
    try {
        $pdo = new PDO(
          'mysql:host=127.0.0.1;dbname=dhu_webpro2exam;charset=utf8;',
          'root',
          'root'
        );
        $messageArray = array();
        $rs = $pdo->prepare('SELECT * FROM messages WHERE room_id=?');
        $rs ->execute(array($room_id));
        while ( $row = $rs->fetch(PDO::FETCH_ASSOC) ){
          $messageArray[]= array(
              'sent_at' => $row['sent_at'],
              'content' => $row['content']
          );
        }
        $this->data_m=$messageArray;
    } 
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }
  }
  
  public function getAll(){
      return $this->data_m;
    }
  public function saveMessage($room_id, $content){
    try {
        $pdo = new PDO(
          'mysql:host=127.0.0.1;dbname=dhu_webpro2exam;charset=utf8;',
          'root',
          'root'
        );
        $rs = $pdo->prepare('INSERT INTO messages (id, room_id, sent_at, content) values(null, ?, now(), ?)');
        $rs->execute(array($room_id, $content));

    } 
    catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }

 }
?>