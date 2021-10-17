<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Multidementsional Arrays</title>
</head>
<body>
	
	<?php
    //INDEXED ARRAY
    $colors = array("Blue", "Green", "Red");
    echo "My Favorite Colors are:" .$colors[0] . ", " . $colors[1] . "and " . $colors[2] ."<hr />";

    //ARRAY LENGTH
    echo count($colors) . "<hr />";

    //LOOP THROUGH AN INDEXED ARRAY
    $arrlength = count($colors);

    for ($x=0; $x < $arrlength; $x++) { 
    	echo $colors[$x] . "<br />";
    }

    echo "<hr />";

    //ASSOCIATIVE ARRAYS
    $tscore =array("John"=>"65", "Bill"=>"80" , "Dan"=>"75");
    echo "Bill scored " . $tscore ["Bill"] . "/100.";

    echo "<hr />";

    //LOOP THROUGH AN ASSOOTATIVE ARRAY
    foreach ($tsc as $x => $score) {
    	echo "key" . $x . ", Score=" . $score;
    echo "<hr />";
    	
    }
	?>
</body>
</html>