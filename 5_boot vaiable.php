<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Home Page</h1>

<?php $hour = date('h') ?>
<p>
 <?php
 if($hour < 6 || $hour > 18) {
 echo "<b>Night Time</b>";
 } else {
 echo "<i>Day Time</i>";
 }
 ?>

	</p>
</body>
</html>