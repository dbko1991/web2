<?php
  if ( !isset($_POST["sub"])){
    exit ("Error!");
  }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ショッピングサイト４</title>
  </head>
  <body>
    <h1>ショッピングサイト４</h1>
    <form method="post" name="shop4" action="shop5.php">
      氏名：<input type="text" name="name"><br>

      住所： <input type="text" name="add" value=""><br>

      電話番号：<input type="tel" name="tel"><br>

      お届け時間：<select name="time">
  			<option value="指定なし" selected>指定なし</option>
  			<option value="午前中">午前中</option>
  			<option value="午後">午後</option>
      </select><br>

      <input type="submit" name="sub" value="確認" />
      <input type="reset" value="クリア" /><br>
    </form>
  </body>
</html>
