<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>最終課題</title>
</head>
<body>
  <p><a href="./">ルーム一覧</a></p>
  <h1>ルーム一覧</h1>
  <p>発言したいルームを選択してください</p>

  <ul>
  <?php foreach ($rooms as $id => $name) { ?>
        <li><a href="../messages/?room_id=<?php echo $id; ?>"><?php echo $name ?></a></li>
  <?php } ?>
  </ul>
</body>
</html>