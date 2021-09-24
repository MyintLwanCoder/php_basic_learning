<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Global Keylword</title>
</head>
<body>
	
	<?php 
    $x = 30;
    $y = 20;

    function test1() {
    	// global $x, $y;
    	// $y = $x + $y;

    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    test1(); //Execute function
    echo $y; // Out put value of varible y
    
	?>
</body>
</html>