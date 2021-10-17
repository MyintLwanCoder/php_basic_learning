<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP switch Statment</title>
</head>
<body>
	<?php 
    
    $x  = 40;

    if ($x < 50) {
    	echo "F";
    }else if ($x >= 50 && $x < 60) {
    	echo "D";
    }else if ($x >= 60 && $x < 70) {
    	echo "C";
    }else if ($x >= 70 && $x < 80) {
    	echo "B";
    }else if ($x >= 80 && $x < 90) {
    	echo "A+";
   }
	?>
</body>
</html>