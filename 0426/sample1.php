<?php
/*1.count関数*/
	// $name[0] ="あ";
	// $name[1] ="い";
	// $name[2] ="う";
	// $name[3] ="え";
	// $name[4] ="お";

/*2.array関数*/
	$name = array("か","き","く","け","こ");

/*3.連想配列array関数*/
	// $name = array("ka" => "か";
	// 							"ki" => "き";
	// 							"ku" => "く";
	// 							"ke" => "け";
	// 							"ko" => "こ";)

	$m = "";
	$num = 1;

/*1.count関数*/
	// $m .="<table>";
	// for($cnt = 0; $cnt < count($name); $cnt++){
	// 	$num = $cnt+1;
	// 	$m .= "<tr><td>".$num.$name[$cnt]."</td></tr>";
	// }
	// $m .="</table>";

/*2.array関数foreach文*/
	foreach($name as $data){
		$m .="<p>".$num." ".$data."</p>";
		$num++;
	}



?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>www</title>
</head>
<body>
	<h1>PHP Sample</h1>
	<?php
		print $m;
	?>
</body>
</html>
