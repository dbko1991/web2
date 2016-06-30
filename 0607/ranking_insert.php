<?php

  $DBSERVER = "localhost";
  $DBUSER = "root";
  $DBPASSWD = "";
  $DBNAME = "web2";
  $con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWD,$DBNAME);
  mysqli_set_charset( $con , "utf8" );

  $sql = "INSERT INTO ranking
(title,artist,point) VALUES
('僕たちは戦わない','AKB48',1782707),
('ハロウィン・ナイト','AKB48',1328411),
('Green Flash','AKB48',1045492),
('唇にBe My Baby','AKB48',905490),
('コケティッシュ渋滞中','SKE48',702299),
('今、話したい誰かがいる','乃木坂46',686539),
('太陽ノック','乃木坂46',678481),
('命は美しい','乃木坂46',620555),
('青空の下、キミのとなり','嵐',571597),
('Dont look back!','NMB48',530830),
('Sakura','嵐',521067),
('愛を叫べ','嵐',519330),
('Thank youじゃん','Kis-My-Ft2',475048),
('前のめり','SKE48',459769)";
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
