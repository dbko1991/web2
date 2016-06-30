<?php
  $date = date("Y年m月d日");

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>練習１</title>
  </head>
  <body>
    <h1>ログイン練習</h1>
    <?php print $date; ?>
    <form action="rensyu1_1.php" method="post" name="form">
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
