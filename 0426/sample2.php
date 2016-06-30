<?php

	$today = date("Y年m月d日");

	$time = date("H");
	if($time>=6 && $time<12){
		echo "おはよう";
	}else if ($time>=12 && $time<18) {
		echo "こんにちは";
	}else {
		echo "こんばんは";
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
		print $today;
	?>
</body>
</html>
