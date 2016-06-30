<?php
  if( !isset( $_POST['sub'])){
    exit("Error!");
  }


  if($_POST["name"] != "" && $_POST["pass"] !=""){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $seibetu = $_POST['seibetu'];
    $email = $_POST['email'];
//    $ok = $_POST['ok'];
    if (!isset($_POST["ok"])){
      $ok = "不可";
    }else{
      $ok = "可";
    }
    $jyusyo = $_POST['jyusyo'];
  }else{
    exit("入力されてません！！");
  }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>form練習</title>
  </head>
  <body>
    <h1>PCトラブルサポートセンター確認画面</h1>
    <?php
      echo "名前：".$name."<br>";
      echo "パスワード：".$pass."<br>";
      echo "住所：".$jyusyo."<br>";
    ?>
  </body>
</html>
