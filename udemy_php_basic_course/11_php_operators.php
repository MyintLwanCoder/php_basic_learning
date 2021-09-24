<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Operators</title>
</head>
<body>

	<?php 
    //Case-sensitive
    difine("WELCOME", "Hello my name is John Smith");
    echo welcome;

    echo "<hr />";
     //case-Insensitive
   difine("WELCOME2", "Hello my name is John Smith", true);
    echo welcome2;
    echo "<hr />";
     //constants are Global
    difine("CAR", "VOLVO");

    function mycar() {
    	echo CAR;
    }

    mycar();
	?>
	
</body>
</html>