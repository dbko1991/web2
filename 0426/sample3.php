<?php
	include("function1.php");
	$m = goukei( 10, 20, 30);
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
		print "合計　".$m."<br />";
		echo mypow(2, 3);
	?>
</body>
</html>
