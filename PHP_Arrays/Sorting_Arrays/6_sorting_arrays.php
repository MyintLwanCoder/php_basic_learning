<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    sort($age);
    foreach ($age as $x => $x_value) {
    	 echo "Key=" . $x . ", Value=" . $x_value;
         echo "<br>";
    	
    }
	?>
</body>
</html>