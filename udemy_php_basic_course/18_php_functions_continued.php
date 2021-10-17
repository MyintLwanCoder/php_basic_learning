<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Functions Continued</title>
</head>
<body>
	
	<?php
    //BASIC Functions
    function displaytxt () {
    	echo "My FIrst Functio";
    }

    displaytxt();

    echo "<hr />";

    //FUNCTION ARGUMENTS
    function myCar($car, $color) {
    	echo "$car, $color<br>";
    }

    mycar("Volvo", "blue");
    mycar("BMW", "red");
    mycar("Honda", "green");
    
	?>
</body>
</html>