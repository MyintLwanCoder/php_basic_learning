<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php 
	$str = "Visit W3Schools";
	$pattern = "/W3Schools/i";
	echo preg_match($pattern, $str);
	?>
</body>
</html>