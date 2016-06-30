<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  $sql = "SELECT * FROM `ranking` WHERE artist = '嵐'";
  $rst = mysqli_query( $con, $sql );

  $m = "<table><tr><th>id</th><th>title</th><th>artist</th><th>point</th>";
  while( $row = mysqli_fetch_array( $rst ) ){
    $m .= "<tr><td>".$row["id"]."</td>";
    $m .= "<td>".$row["title"]."</td>";
    $m .= "<td>".$row["artist"]."</td>";
    $m .= "<td>".$row["point"]."</td></tr>";
  }
  $m .= "</table>";


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
