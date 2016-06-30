<?php
  if( !isset( $_POST['sub'])){
    exit("Error!");
  }


  if($_POST["name"] != "" && $_POST["add"] !=""){
    $name = $_POST['name'];
    $add = $_POST['add'];
    $tel = $_POST['tel'];
    $time = $_POST['time'];
  }else{
    exit("入力されてません！！");
  }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ショッピングサイト５</title>
  </head>
  <body>
    <h1>ショッピングサイト５</h1>
    <?php
      echo "氏名：".$name."<br>";
      echo "住所：".$add."<br>";
      echo "電話番号：".$tel."<br>";
      echo "お届け時間：".$time."<br>";
    ?>
    <form method="post" name="shop5" action="shop6.php">
      <input type="submit" name="sub" value="購入" />
    </form>
  </body>
</html>
