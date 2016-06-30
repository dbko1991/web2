<?php

  if(!isset($_POST["add"])){
    exit("アクセスエラー");
  }

  $m = "";
  $company = $_POST["com"];
  $category = $_POST["category"];
  $payroll = $_POST["payroll"];

  $con = mysqli_connect("localhost","root","","web2");
  mysqli_set_charset($con,"utf8");

  $sql = "INSERT INTO syukatu (company,category,payroll) VALUES (?,?,?)";
  $stmt = mysqli_prepare($con,$sql); //ステートメント（指示文）を用意する
  mysqli_stmt_bind_param($stmt, 'sss', $company, $category, $payroll); //ステートメントに変数をバインド。s→文字列string、nameとmsgあるので二つsがある。idは整数i。
  $rst = mysqli_stmt_execute($stmt); //ステートメントを実行
  mysqli_stmt_close($stmt);

  if($rst){
    $m = "成功しました";
  }
  else{
    $m = "失敗しました";
  }

  
  mysqli_close($con);


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
     <a href="syukatu.html">検索サイトに戻る</a>
  </body>
</html>
