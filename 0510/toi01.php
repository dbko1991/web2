<?php
  if( !isset( $_POST['sub'])){
    exit("Error!");
  }


  if($_POST["name"] != "" && $_POST["message"] !=""){
    $name = $_POST['name'];
    $message = $_POST['message'];
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
      echo "質問：".$message."<br>";
    ?>
    <form method="post" name="f2" action="toi01_sub.php">
      <input type="submit" name="sub" value="送信" />
    </form>
  </body>
</html>
