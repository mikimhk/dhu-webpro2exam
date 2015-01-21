<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>DHU裏チャット</title>
</head>
<body>
  <p><a href="">ルーム一覧</a></p>
  <h1>ルーム名前</h1>
  <p>〜のメッセ一覧です</p>
  <ul>
   <?php 
   // echo "おーい";
      foreach ($data_m as $d) {
        echo "<li>${d['sent_at']}<br />${d['content']}</li>";
        
      }
      
    ?>
  </ul>
  
  <form action="record.php" method="POST">
    <textarea id="msg"></textarea>
    <br>
    <button onclick="send()">発言</button>
  </form>


</body>
</html>