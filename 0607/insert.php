<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  $sql = "INSERT INTO akb48 (id,sugaku,kokugo,eigo) VALUES (11,80,70,50)";
  $rst = mysqli_query( $con, $sql );

  if($rst){
    $m = "成功しました";
  }
  else{
    $m = "失敗しました";
  }

  mysqli_close( $con );


?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo $m."<br>"."<br>";
     ?>
  </body>
</html>
