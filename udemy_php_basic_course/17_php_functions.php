<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Functions</title>
</head>
<body>
	<?php
    //FOR LOOP
    for ($x =0; $x <= 10; $x++) { 
    	echo "$x <br>";
    }

    echo "<hr />";


    //FOR EACH LOOP
    $cars = array("volvo", "bmw", "honda", "ford");

    foreach ($cars as $value) {
    	echo "$value <br>" ;
    }
    
	?>
</body>
</html>