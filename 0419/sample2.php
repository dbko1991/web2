<?php
	$dt = rand(0,5);

	switch($dt){
		case 0 :
			$a = "大吉";
			break;
		case 1 :
			$a = "中吉";
			break;
		case 2 :
			$a = "小吉";
			break;
		case 3 :
			$a = "吉";
			break;
		case 4 :
			$a = "末吉";
			break;
		case 5 :
			$a = "凶";
			break;
	}

	if($dt == 0) $b = "大吉";
	if($dt == 1) $b = "中吉";
	if($dt == 2) $b = "小吉";
	if($dt == 3) $b = "吉";
	if($dt == 4) $b = "末吉";
	if($dt == 5) $b = "凶";



	$omikuji[0] = "大吉";
	$omikuji[1] = "中吉";
	$omikuji[2] = "小吉";
	$omikuji[3] = "吉";
	$omikuji[4] = "末吉";
	$omikuji[0] = "凶";
	$m = $omikuji[$dt];
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
		print $a."<br/>";
		print $b."<br/>";
		print $m;
	?>
</body>
</html>