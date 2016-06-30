<?php
	$name[0] ="あ";
	$name[1] ="い";
	$name[2] ="う";
	$name[3] ="え";
	$name[4] ="お";

	$m = "";
	$num = "";
	
	$m .="<table>";
	for($cnt = 0; $cnt < 5; $cnt++){
		$num = $cnt+1;
		$m .= "<tr><td>".$num.$name[$cnt]."</td></tr>";
	}
	$m .="</table>";
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