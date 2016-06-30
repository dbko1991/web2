<?php
  $m="";

  $no = $_GET['no'];

  // if($no == 1){
  //   $m = "img/kani.jpg";
  // }else if ($no == 2) {
  //   $m = "img/ramen.jpg";
  // }else if ($no == 3) {
  //   $m = "img/soba.jpg";
  // }

  switch($no){
    case 1 :
      $m = "img/kani.jpg";
      break;
    case 2 :
      $m = "img/ramen.jpg";
      break;
    case 3 :
      $m = "img/ramen.jpg";
      break;
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
