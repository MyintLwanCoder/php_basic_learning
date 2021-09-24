<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Constants</title>
</head>
<body>
	<?php 
    
    //WORD COUNT
    echo str_word_count("Hello world!");
    echo "<hr />";

    //REVERSE WORDS
    echo strrev("Hello world!");//outputs !drow olleH
    echo "<hr />";

    //REPLACE TEXT INSIDE A STRING
    echo str_replace("world", "John", "Hello world!");  //outputs Hello Dolly!
    echo "<hr />"
	?>
</body>
</html>