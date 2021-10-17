<?php 
    if (isset($_POST['submit'])) {
         $username=$_POST['username'];
         $password=$_POST['password'];
         $min = 5;
         if (strlen($username) > $min) {
         	echo $username;
         }else{
         	echo "Please Enter User Name more than 5 Character";
         }
         if (strlen($username) > 15) {
         	echo "Please Enter User Name more than 5 Character";
         }else{
         	echo $username;
         }
    	 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vaildating Form</title>
</head>
<body>
	<form action="Vaildating_form.php" method="post">
		<input type="text" placeholder="Please Enter Your Name" name="username"><br><br>
		<input type="password" placeholder="Please Enter Your password" name="password"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>