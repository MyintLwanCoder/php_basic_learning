<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Sorting Arrays</title>
</head>
<body>
	<?php 
   //SORT

   $names = array("John" ,"Dana" , "Ted", "Sam" , "Xena", "zara");
   rsort($name);

   $nlen = oount ($names);
   for ($x=0; $x < $nlen; $x++) { 
   	echo $names[$x];
   	echo "<br>";
   }

   echo "<br>";

   //ASSOCTATIVE ARRAY SORT ACCORDING 70 VALUE

   $tscore = array("John"=>"60", "Bill"=>"80" ,"Dan"=>"75");
   krsort($tscore);

   foreach ($tscore as $x => $_value) {
   	echo "Key" . $x . ", value=" . $x_value;
   	echo "<br>";
   }

	?>
</body>
</html>