<?php
  if ( !isset($_POST["sub"])){
    exit ("Error!");
  }

  $m = "";
  if ($_POST["name"] =="sekine"){
      if($_POST["pass"] == "771"){
        $m = $_POST["name"]."さん、こんにちは";
      }else{
        exit("NOT PASSWORD");
      }
  }else{
    exit("NOT USER");
  }

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>練習１</title>
  </head>
  <body>
    <h1>ログイン練習</h1>
    <?php print $m; ?>
  </body>
</html>
