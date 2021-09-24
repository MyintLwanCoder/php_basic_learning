<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP conditional statements</title>
</head>
<body>
	<h2>PHP Arithmetic Operators</h2>
	<!-- Used to compare Two values -->
	<?php 
         $x = 50;
         $y = 20;

         //ADDITION
         echo $x + $y;
         echo "<hr />";

        //SUBTRACTION
         echo $x - $y;
         echo "<hr />";

         //MULTIPLICATION
         echo $x * $y;
         echo "<hr />";

         //DIVISION
         echo $x / $y;
         echo "<hr />";

         //MODULUS
         echo $x % $y;
	?>
	<h2>PHP Assigment Operator</h2>
	<!-- Used with numeric values to write values to a variable -->

	<?php 
    //The left operand is assigmed the value on the right
    $x = 20;
    echo $x;
	?>

	<h2>Comparison Operators</h2>
 <!-- Used to compare two values (numer to a string) -->

<?php 
  //Equal
$x = 300;
$y = "300";
var_dump($x == $y); //output is True because x = y
echo "<br><br>";
//Identical
$x = 300;
$y = "300";
var_dump($x === $y); //output is Flase because types are not equal
echo "<br><br>";

//Not equal
$x = 300;
$y = "300";
var_dump($x != $y); //output is True because Value are equal
echo "<br><br>";

//Not equal
$x = 300;
$y = "300";
var_dump($x <> $y); //output is True because Value are equal
echo "<br><br>";

//Not Identical
$x = 300;
$y = "300";
var_dump($x !== $y); //output is True because Value are equal
echo "<br><br>";

//Greater than
$x = 300;
$y = 500;
var_dump($x > $y); //output is True because x is not greater than y
echo "<br><br>";

//Greater than 
$x = 300;
$y = 500;
var_dump($x < $y); //output is True because x is not greater than y
echo "<br><br>";


//Greater than or equal to
$x = 300;
$y = 500;
var_dump($x >= $y); //output is True because x is not than or equal to y
echo "<br><br>";

//Greater than or equal to
$x = 300;
$y = 500;
var_dump($x <= $y); //output is True because x is less than y
echo "<br><br>";

?>

<h2>Inerement/Decrement Operators </h2>
<!-- Used to Increment or Decrement a variables value -->

<?php 

    //Post-increment _ returns $x then incrementa $x by one
    $x = 50;
    echo $x++;
    echo "<hr />";

    //Post-increment _ Incremenrs $x then incrementa $x by one
    $x = 50;
    echo ++$x;
    echo "<hr />";

    //Post-increment _ Decrements $x then incrementa $x by one
    $x = 50;
    echo --$x;
    echo "<hr />";

    //Post-increment _ Returns $x then incrementa $x by one
    $x = 50;
    echo $x--;
    echo "<hr />";

?>

<h2> Logical Operators </h2>
<!-- Used to combine conditional statements -->

<?php 
  //And - True if both $x and $y are true
   $x = 200;
   $y = 300;

   if ($x == 200 and $y == 300) {
   	echo "True";
   	echo "<hr />";
   }

   //Or - Ture if either $x or $y is true
   $x = 200;
   $y = 300;

   if ($x == 200 or $y == 90) {
   	echo "True";
   	echo "<hr />";
   }

   //And - && - True if both $x and $y are true
   // $x = 200;
   // $y = 300;

   // if ($x == 200 ,, $y == 300) {
   // 	echo "True";
   // 	echo "<hr />";
   // }

      //Or - $x || $y - either $x or $y is true
   $x = 200;
   $y = 300;

   if ($x == 200 || $y == 90) {
   	echo "True";
   	echo "<hr />";
   }
      //Not - !$x - True if $x is not true
   $x = 200;
   $y = 300;

   if ($x !== 100) {
   	echo "True";
   	echo "<hr />";
   }

?>

<h2> PHP string Operators </h2>
<!-- Used to Specifically for Strings -->

<?php
  //concatenation = concatenation of $x and $y
  $x = "Hello";
  $y = " world!";
  echo $x . $y;
  echo "<hr />";

  //concatenation assignment = Appends $txt2 to $txt1
  $x = "John";
  $y = " Smith";
  $x .= $y;
  echo $x;
  echo "<hr />";
?>

<h2>Array Operators</h2>
<!-- Used to compare Arrays -->
<?php 

  //Union - Union of $x and $y
   $x = array("a" => "blue", "b" => "red");
   $y = array("c" => "pink", "d" => "brown");

   print_r($x + $y);  //Union
   echo "<hr />";

   //Equality - Returns true if $x and $y have the same key/value pairs
   $x = array("a" => "blue", "b" => "red");
   $y = array("c" => "pink", "d" => "brown");

   var_dump($x == $y);  
   echo "<hr />";

   //Identity - Returns true if $x and $y have the same key/value pairs in the saem order and the same types 
   $x = array("a" => "blue", "b" => "red");
   $y = array("c" => "pink", "d" => "brown");

   var_dump($x === $y);  
   echo "<hr />";

   //Identity - Returns true if $x is not equal to $y
   $x = array("a" => "blue", "b" => "red");
   $y = array("c" => "pink", "d" => "brown");

   var_dump($x != $y);  
   echo "<hr />";

   //Inequality - Returns true if $x is no equal to $y
   $x = array("a" => "blue", "b" => "red");
   $y = array("c" => "pink", "d" => "brown");

   var_dump($x <> $y);  
   echo "<hr />";

      //Inequality - Returns true if $x is not identical to $y
   $x = array("a" => "blue", "b" => "red");
   $y = array("c" => "pink", "d" => "brown");

   var_dump($x !== $y);  
   echo "<hr />";
?>
</body>
</html>