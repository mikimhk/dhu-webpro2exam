<?php
//   if (isset($_POST["data"])) { 
//     $data = $_POST["data"]; //POSTのデータを変数$dataに格納
//   if( get_magic_quotes_gpc() ) { $data = stripslashes("$data");} //クォートをエスケープ
//     $data = htmlspecialchars ($data); //HTMLタグ禁止
//     $data = mb_substr ($data, 0, 200, 'UTF-8'); //長いデータを200文字でカット
//     print $data; //表示する
//   }
//↑入れたかった 

//セッションIDをトークンとして利用する。
$token = isset($_POST['token'])?$_POST['token']:"";
session_start();

//トークンが異なっていたら弾く
if(session_id() !== $token){
  exit(); 
}

//トークンをパスしたら、新しいセッションID(トークン)を発行する。
session_regenerate_id(TRUE);

function saveMessage($message){
  try{
  $pdo = new PDO(
          'mysql:host=127.0.0.1;dbname=dhu_webpro2exam;charset=utf8;',
          'root',
          'root'
        );
  $sql="INSERT INTO Messages (id, room_id, sent_at, content)
  VALUES
  ('$_POST[id]','$_POST[room_id]','$_POST[sent_at]','$_POST[content]')";
}

mysqli_close($con);
?>