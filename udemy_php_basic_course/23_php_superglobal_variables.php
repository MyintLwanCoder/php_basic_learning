<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Superglobal Variables</title>
</head>
<body>
	<?php 
    
    //GLOBAL Variables
    $x = 30;
    $y = 40;

    function add() {
    	$GLOBALS['z'] = $GLOBALS['x'] +$GLOBALS['y'];
    }

    add();
    echo $z;

    //OTHER SUPERGLOBALS
    echo "<hr />";

    echo $_SEVER['PHP_SELF'];
    echo "<hr />";
    echo $_SEVER['_SEVER_NAME'];
    echo "<hr />";

	?>
	
</body>
</html>