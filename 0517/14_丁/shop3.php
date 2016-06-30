<?php
  if ( !isset($_POST["sub"])){
    exit ("Error!");
  }

  $m="";
  $total=0;
  if($_POST["s01"] !=0){
    $m .="お米（2kg）　".$_POST["s01"]."個<br>";
    $total += $_POST["s01"]*1000;
  }
  if($_POST["s02"] !=0){
    $m .="アルカリ乾電池（3本）　".$_POST["s02"]."個<br>";
    $total += $_POST["s02"]*300;
  }
  if($_POST["s03"] !=0){
    $m .="LEDライト　".$_POST["s03"]."個<br>";
    $total += $_POST["s03"]*300;
  }
  if($_POST["s04"] !=0){
    $m .="オリーブオイル　".$_POST["s04"]."個<br>";
    $total += $_POST["s04"]*500;
  }
  if($_POST["s05"] !=0){
    $m .="りんご　".$_POST["s05"]."個<br>";
    $total += $_POST["s05"]*100;
  }
  $m .= "合計金額" .$total."円<br>"

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ショッピングサイト３</title>
  </head>
  <body>
    <h1>ショッピングサイト３</h1>
    <?php
      print $m;
    ?>
    <form action="shop4.php" method="post" name="shop3">
      <p>
        <input type="submit" name="sub" value="会計">
      </p>
    </form>
  </body>
</html>
