<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  $sql = "SELECT akb48.id,name,sugaku,kokugo,eigo,(sugaku+kokugo+eigo) as total FROM `akb48`,`akb48_member` WHERE akb48.id=akb48_member.id  ORDER BY (sugaku+kokugo+eigo) DESC,eigo DESC";
  $rst = mysqli_query( $con, $sql );

  $m = "";
  while( $row = mysqli_fetch_array( $rst ) ){
    $m .= $row["id"]." ";
    $m .= $row["name"]." ";
    $m .= $row["sugaku"]." ";
    $m .= $row["kokugo"]." ";
    $m .= $row["eigo"]." ";
    $m .= $row["total"]."<br>";
  }


  $sql1 = "SELECT akb48.id,name,sugaku,kokugo,eigo,(sugaku+kokugo+eigo) as total FROM `akb48`,`akb48_member` WHERE (akb48.id=akb48_member.id AND (sugaku+kokugo+eigo)>=170)";
  $rst1 = mysqli_query( $con, $sql1 );

  $a = "";
  while( $row = mysqli_fetch_array( $rst1 ) ){
    $a .= $row["id"]." ";
    $a .= $row["name"]." ";
    $a .= $row["sugaku"]." ";
    $a .= $row["kokugo"]." ";
    $a .= $row["eigo"]." ";
    $a .= $row["total"]."<br>";
  }


  $sql2 = "SELECT akb48.id,name,sugaku,kokugo,eigo,(sugaku+kokugo+eigo) as total FROM `akb48`,`akb48_member` WHERE (akb48.id=akb48_member.id AND sugaku>=50 AND kokugo>=50 AND eigo>=50)";
  $rst2 = mysqli_query( $con, $sql2 );

  $b = "";
  while( $row = mysqli_fetch_array( $rst2 ) ){
    $b .= $row["id"]." ";
    $b .= $row["name"]." ";
    $b .= $row["sugaku"]." ";
    $b .= $row["kokugo"]." ";
    $b .= $row["eigo"]." ";
    $b .= $row["total"]."<br>";
  }


  $sql3 = "SELECT akb48.id,name,sugaku,kokugo,eigo,(sugaku+kokugo+eigo) as total FROM `akb48`,`akb48_member` WHERE (akb48.id=akb48_member.id AND ((sugaku>=50 AND kokugo<50 AND eigo<50) OR (sugaku<50 AND kokugo>=50 AND eigo<50) OR (sugaku<50 AND kokugo<50 AND eigo>=50)))";
  $rst3 = mysqli_query( $con, $sql3 );

  $c = "";
  while( $row = mysqli_fetch_array( $rst3 ) ){
    $c .= $row["id"]." ";
    $c .= $row["name"]." ";
    $c .= $row["sugaku"]." ";
    $c .= $row["kokugo"]." ";
    $c .= $row["eigo"]." ";
    $c .= $row["total"]."<br>";
  }


  $sql4 = "SELECT akb48.id,name,sugaku,kokugo,eigo,(sugaku+kokugo+eigo) as total FROM `akb48`,`akb48_member` WHERE (akb48.id=akb48_member.id AND sugaku>=50 AND kokugo>=50 AND eigo>=50 AND eigo>sugaku AND eigo>kokugo)";
  $rst4 = mysqli_query( $con, $sql4 );

  $d = "";
  while( $row = mysqli_fetch_array( $rst4 ) ){
    $d .= $row["id"]." ";
    $d .= $row["name"]." ";
    $d .= $row["sugaku"]." ";
    $d .= $row["kokugo"]." ";
    $d .= $row["eigo"]." ";
    $d .= $row["total"]."<br>";
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
      echo "問１<br>".$m."<br>"."<br>";
      echo "問２<br>".$a."<br>"."<br>";
      echo "問３<br>".$b."<br>"."<br>";
      echo "問４<br>".$c."<br>"."<br>";
      echo "問５<br>".$d."<br>"."<br>";
     ?>
  </body>
</html>
