<?php 
  class RoomsModel{
    private $rooms;
    private $data_n;
    
    public function all(){
      try {
        $pdo = new PDO(
          'mysql:host=127.0.0.1;dbname=dhu_webpro2exam;charset=utf8;',
          'root',
          'root'
        );
        $rs = $pdo->query('SELECT * FROM rooms');


      //table rooms の中身を配列に収納
        $roomsArray = array();
        while ( $row = $rs->fetch(PDO::FETCH_ASSOC) ){
          // var_dump($row);
          // echo $row["id"];
          // echo $row["name"];
          $roomsArray[$row['id']]=$row['name'];
        }
        $this->rooms=$roomsArray;
      } 
      catch (PDOException $e) {
        var_dump($e->getMessage());
      }
    }

    public function getName($name){
      try {
        $pdo = new PDO(
          'mysql:host=127.0.0.1;dbname=dhu_webpro2exam;charset=utf8;',
          'root',
          'root'
        );
        $nameArray = array();
        $rs = $pdo->prepare('SELECT * FROM rooms WHERE name=?');
        $rs ->execute(array($name));
        while ( $row = $rs->fetch(PDO::FETCH_ASSOC) ){
          $nameArray[$row['id']]=$row['name'];
        }
        $this->data_n=$nameArray;
      }
      catch (PDOException $e) {
        var_dump($e->getMessage());
      }
    }
    
    public function getAll(){
      return $this->rooms;
    }

  } 
?>