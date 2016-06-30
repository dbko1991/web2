<?php
  if( !isset( $_POST['sub'])){
    exit("Access Error!");
  }

  if( $_POST['name'] == "sekine" && $_POST['pass'] == "771"){
    $m="ようこそ　".$_POST['name']."さん";
    print $m;
  }else{
    exit("違ってる！！");
  }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>form練習</title>
  </head>
  <body>
    <h1>form練習</h1>
    <?php print $m; ?>
  </body>
</html>
