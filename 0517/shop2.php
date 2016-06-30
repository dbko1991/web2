<?php
  if ( !isset($_POST["sub"])){
    exit ("Error!");
  }

  $m = "";
  if ($_POST["name"] =="aw"){
      if($_POST["pass"] == "771"){
        $m = $_POST["name"]."さん、こんにちは";
      }else{
        exit("NOT PASSWORD");
      }
  }else{
    exit("NOT USER");
  }

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ショッピングサイト２</title>
  </head>
  <body>
    <h1>ショッピングサイト２</h1>
    <?php print $m; ?>

    <form action="shop3.php" method="post" name="shop2">
      <table cellspacing="0" cellpadding="2" border="1">
        <tr>
          <td>品物</td>
          <td>単価（円）</td>
          <td>個数</td>
        </tr>
        <tr>
          <td>お米（2kg）</td>
          <td>1000</td>
          <td>
            <select name="s01">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>アルカリ乾電池（3本）</td>
          <td>300</td>
          <td>
            <select name="s02">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>LEDライト</td>
          <td>300</td>
          <td>
            <select name="s03">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>オリーブオイル</td>
          <td>500</td>
          <td>
            <select name="s04">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>りんご</td>
          <td>100</td>
          <td>
            <select name="s05">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </td>
        </tr>
      </table>
      <p>
        <input type="submit" name="sub" value="会計">
      </p>
    </form>
  </body>
</html>
