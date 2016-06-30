<?php
  $m="";

  $no = $_GET['no'];

  if($no == 1){
    $m = "img/niku.jpg";
  }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>get</title>
  </head>
  <body>
    <h1>GETテスト</h1>
    <?php
      print "<img src='".$m."'>";

    ?>
  </body>
</html>
