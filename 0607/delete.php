<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  $sql = "DELETE FROM akb48 WHERE id=11";
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
