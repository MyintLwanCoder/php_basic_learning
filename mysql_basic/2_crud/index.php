<?php inclued('server.php');  ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['massage'])): ?>
       <div class="msg">
       	<?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
       	 ?>
       </div>
   <?php endif ?>
	
	<form method="post" action="server.php">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="submit">save</button>
		</div>
	</form>
</body>
</html>