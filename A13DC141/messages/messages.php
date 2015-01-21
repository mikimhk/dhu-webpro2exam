<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>最終課題</title>
</head>
<body>
  <p><a href="../rooms/">ルーム一覧</a></p>
  <p>大学に関する話題のメッセージ一覧です</p>
  <ul>
   <?php
      foreach ($data_m as $d) {
        echo "<li>${d['sent_at']}<br />${d['content']}</li>";
        
      }
      
    ?>
  </ul>
  
  <form action="record.php" method="POST">
    <textarea id="msg" name="content"></textarea>
    <input type="hidden" name="room_id" value="<?php echo $room_id ?>">
    <br>
    <button type="submit">発言</button>
  </form>


</body>
</html>