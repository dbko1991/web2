<?php
  if(!isset($_POST["sub"])){
    exit("アクセスエラー");
  }

  $m = "";
  $company = $_POST["com"];
  $category = $_POST["category"];
  $payroll = $_POST["payroll"];

  $con = mysqli_connect("localhost","root","","web2");
  mysqli_set_charset($con,"utf8");

  $sql = "SELECT * FROM syukatu
          WHERE company = ? OR category = ? OR payroll = ?";

  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, 'sss', $company, $category, $payroll);
  mysqli_stmt_execute($stmt);//if($rst) $m="成功しました" else $m="失敗しました"
  $rst = mysqli_stmt_get_result($stmt);

  $m = "<table><tr><th>id</th><th>会社名</th><th>職種</th><th>初任給</th>";
  while( $row = mysqli_fetch_array( $rst ) ){
    $m .= "<tr><td>".$row["id"]."</td>";
    $m .= "<td>".$row["company"]."</td>";
    $m .= "<td>".$row["category"]."</td>";
    $m .= "<td>".$row["payroll"]."</td></tr>";
  }
  $m .= "</table>";


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
       echo $m."<br>"."<br>";
      ?>

      <a href="syukatu.html">検索サイトに戻る</a>
   </body>
 </html>
