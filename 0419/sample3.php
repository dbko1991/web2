<?php
	$total = 0;
	for($x=0;$x<=100;$x++){
		$total += $x;
		//$total = $total + $x;
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
		print "0~100までの合計は".$total;
	?>
</body>
</html>