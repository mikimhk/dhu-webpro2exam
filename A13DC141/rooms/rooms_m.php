<?php 
  class RoomsModel{
    private $rooms;
    
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

    public function getAll(){
      return $this->rooms;
    }

  } 
?>