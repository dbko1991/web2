<?php
  if( !isset( $_POST['sub'])){
    exit("Access Error!");
  }

  if( $_POST['name'] == "sekine" && $_POST['pass'] == "771"){
    $m="ようこそ　".$_POST['name']."さん";
  }else{
    exit("パスワードが間違っています。");
  }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ECサイト商品ページ</title>
  </head>
  <body>
    <h1>ECサイト商品ページ</h1>
    <?php print $m; ?>

    <form action="sub.php" method="post" name="goods">
      <input type="checkbox" name="value[]" value="100">商品1 100円<br>
      <input type="checkbox" name="value[]" value="200">商品2 200円<br>
      <input type="checkbox" name="value[]" value="300">商品3 300円<br>
      <input type="submit" name="sub" value="決定" />
    </form>
  </body>
</html>
