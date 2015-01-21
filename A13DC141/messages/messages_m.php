<?php
 class MessagesModel{
  private $data_m;
  private $room_id;
  function __construct($room_id){
    $this->room_id = $room_id;
  }

  public function all(){
    try {
        $pdo = new PDO(
          'mysql:host=127.0.0.1;dbname=dhu_webpro2exam;charset=utf8;',
          'root',
          'root'
        );
        $messageArray = array();
        $rs = $pdo->query('SELECT * FROM messages');
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
 }
?>