<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $art= $_POST["art"];
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  // $sql = "SELECT * FROM `ranking` WHERE artist = '嵐'";
  // $rst = mysqli_query( $con, $sql );

  $sql = "SELECT * FROM ranking WHERE artist = ?";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, 's', $art);
  mysqli_stmt_execute($stmt);//if($rst) $m="成功しました" else $m="失敗しました"
  $rst = mysqli_stmt_get_result($stmt);

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
    <form action="" method="post" name="f">
      アーティスト名： <input type="text" name="art">
      <input type="submit" name="sub" value="検索"><br>
    </form>
    <?php
      echo $m."<br>"."<br>";
     ?>
  </body>
</html>
