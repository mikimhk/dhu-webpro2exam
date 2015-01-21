<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>DHU裏チャット</title>
</head>
<body>
  <p><a href="">ルーム一覧</a></p>
  <h1>ルーム一覧</h1>
  <p>発言したいルームを選択しなさい</p>

  <ul>
   <?php 
      foreach ($rooms as $name) {
        echo "<li>${name}</li>";
      }
      
    ?>
  </ul>


</body>
</html>