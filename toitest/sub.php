<?php
  if( !isset( $_POST['sub'])){
    exit("Access Error!");
  }



  $total = 0;
  foreach ($_POST['value'] as $val) {
    $total += $val;
  }

 ?>

 <!DOCTYPE html>
 <html lang="ja">
   <head>
     <meta charset="utf-8">
     <title>ECサイト決済ページ</title>
   </head>
   <body>
     <h1>ECサイト決済ページ</h1>

     <p>
       合計は<?php echo $total; ?>円
     </p>

   </body>
 </html>
