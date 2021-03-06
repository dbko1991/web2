<?php
  require_once("img_file_name.php");
  $m = "";
  $con = mysqli_connect("localhost","root","","web2");
  mysqli_set_charset( $con , "utf8" );

  if ( isset( $_POST["sub"]) ){ //投稿ボタンが押されたとき
    $name=$_POST["name"];
    $msg=$_POST["msg"];
    $img=img_file_name();

    $sql="INSERT INTO bbs ( name, msg, post_time, img)
          VALUES (?, ?, now(), ? )"; //後から代入箇所を？にする
    $stmt = mysqli_prepare($con,$sql); //ステートメント（指示文）を用意する
    mysqli_stmt_bind_param($stmt, 'sss', $name, $msg, $img); //ステートメントに変数をバインド。s→文字列string、nameとmsgあるので二つsがある。idは整数i。
    $rst = mysqli_stmt_execute($stmt); //ステートメントを実行
    mysqli_stmt_close($stmt);
  }

  $sql = "SELECT * FROM bbs ORDER BY id DESC LIMIT 0, 10"; //最新のものから１０件分
  $rst = mysqli_query($con,$sql);

  while ($row = mysqli_fetch_array($rst)){
    $m.="<p>".$row["id"]." ";
    $m.=$row["name"]." ";
    $m.=$row["post_time"]."</p>";
    $m.="<p>".nl2br($row["msg"])."</p>"; //<br>形式に変える、エスケープシーケンス
    if (!is_null($row["img"])){
      $m.="<p><img src='upload/".$row["img"]." 'width='200'></p>";
    }

  }

  mysqli_free_result($rst);
  mysqli_close($con);
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>掲示板</title>
  </head>
  <body>
    <h1>私の掲示板</h1>
    <form action="" method="post" name="f" action="" enctype="multipart/form-data">
      投稿者名： <input type="text" name="name"><br>
      <input type="submit" name="sub" value="投稿"><br>
      <textarea name="msg" rows="5" cols="70"></textarea><br>
      画像（GIF/JPEG形式、100kb以下）： <input type="file" name="uploadfile" size="40">
    </form>
    <?php echo $m; ?>
  </body>
</html>
