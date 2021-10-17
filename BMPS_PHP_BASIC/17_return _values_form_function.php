<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function Return value</title>
</head>
<body>
	<?php 
    
       function add_number($num1,$num2) {
       	$sum = $num1 + $num2;
       	return $sum;
       }
       $result=add_number(50,20);
       $result =
       add_number($result,100);
       echo $result;
	?>
	
</body>
</html>