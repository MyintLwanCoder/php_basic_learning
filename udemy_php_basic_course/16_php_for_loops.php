<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Loops</title>
</head>
<body>
	
	<?php 
    //WHILE LOOP
    $x = 5;

    while ($x <= 10) {
    	echo "The number is: $x <br>";
    	$x++;
    }
    echo "<hr />";

    //Do WHILE LOOP
    $x = 6;
    do {
    	echo "The number is: $x <br>";
    	$x++;
    }while ($x <= 5);
    
	?>
</body>
</html>