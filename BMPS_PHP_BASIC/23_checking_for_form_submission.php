<?php 
  if (isset($_POST['sub'])) {
      //echo "Hello Green Hackers Student";
  	// echo $_POST['username'];
  	// echo $_POST['password'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	echo $username ."<br>";
  	echo $password;
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Submit</title>
</head>
<body>
	
	<form action="form_submit.php" method="post">
		<input type="text" placeholder="Please Enter Your Name"name="username"><br><br>
		
		<input type="password" placeholder="Please Enter Your Password"name="Password"><br><br>
		<input type="Submit" name="sub">
	</form>
</body>
</html>