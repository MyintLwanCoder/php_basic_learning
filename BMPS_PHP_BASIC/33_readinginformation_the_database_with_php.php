<?php 

$connect=mysqli_connect('localhost','root','','loginapp');
     if (!$connect){
        	die('Connected Failed');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Read Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-border">
      <tr>
        <th>User Id</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Remark</th>
      </tr>  
      <tr>
      <?php
      $query ="SELECT id, username, password FORM users ";
      $result=mysqli_query($connect,$query);
        if (!$result){
             die('Query Failed');
         }
            while ($row <= mysqli_fetch_assoc($result)) {
               sid=$row['id'];
               $username = $row['username'];
               $password = $row['password'];
 
            </tr>
            <tr>
            <td><?php echo side;?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $password; ?></td>
            <td></td>
       </tr>
         

          }
        ?>
      
      
        </table>
			</div>
		</div>
	</div>
    

    <script src="js/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>