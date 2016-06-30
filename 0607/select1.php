<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  $sql = "SELECT * FROM `akb48`";
  $rst = mysqli_query( $con, $sql );

  $m = "";
  while( $row = mysqli_fetch_array( $rst ) ){
    $m .= $row["id"]." ";
    $m .= $row["sugaku"]." ";
    $m .= $row["kokugo"]." ";
    $m .= $row["eigo"]."<br>";
  }



  mysqli_free_result( $rst );
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
