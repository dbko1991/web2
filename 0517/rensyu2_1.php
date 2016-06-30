<?php
  if ( !isset($_POST["sub"])){
    exit ("Error!");
  }

  $m="";
  $total=0;
  if($_POST["s01"] !=0){
    $m .="カップラーメン　".$_POST["s01"]."個<br>";
    $total += $_POST["s01"]*150;
  }
  if($_POST["s02"] !=0){
    $m .="幕の内弁当　".$_POST["s02"]."個<br>";
    $total += $_POST["s02"]*450;
  }
  if($_POST["s03"] !=0){
    $m .="お茶　".$_POST["s03"]."個<br>";
    $total += $_POST["s03"]*130;
  }
  $m .= "合計金額" .$total."円<br>"

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>練習２</title>
  </head>
  <body>
    <h1>form練習,確認ページ</h1>
    <?php
      print $m;
    ?>

  </body>
</html>
