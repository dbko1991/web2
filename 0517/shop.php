<?php
  $date = date("Y年m月d日 H時i分");
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ショッピングサイト</title>
  </head>
  <body>
    <h1>ショッピングサイト</h1>
    <?php print $date; ?>
    <form action="shop2.php" method="post" name="shop">
      <p>
        ユーザー名：<input type="text" name="name">
      </p>
      <p>
        パスワード： <input type="password" name="pass">
      </p>
      <input type="submit" name="sub" value="ログイン">
    </form>
  </body>
</html>
