<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Data Types</title>
</head>
<body>
<?php 
  //STARING
  $x = "Hello world!";
  $y = 'Hello world!';
  echo $x;
  echo "<br>";
  echo $y;
  echo "<hr />";

  //INTEGER
  $num = 6000;
  var_dump($num);
  echo "<hr />";

  //FLOAT
  $num2 = 20.565;
  var_dump($num2);
  echo "<hr />";

  //ARRAY
  $sport = array("Soccer","Tennis","Baseball","Football");
  var_dump($sport);
  echo "<hr />";


  //NULL
  $color = "Blue";
  $color = null;
  var_dump($color);


  //BOOLEN
  $x = true;
  $y = false;
  var_dump($x);
  var_dump($y);
?>

	
</body>
</html>