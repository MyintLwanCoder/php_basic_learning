<?php 
include_once "function.php";
require_once "db.php";
if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = mysqli_real_escape_string($connect,$username);
  $password = mysqli_real_escape_string($connect,$password);
  $hash_function="$2y$10$";
  $salt = "iusesomecrazystrings22";
  $hash_salt_format = $hash_function . $salt;
  $password = crypt($password,$hash_salt_format); 
  if ($username && $password) {
    $query = "INSERT INTO user_create(username, password) VALUES ('$username','$password')"; 
    $result = mysqli_query($connect,$query);
    result_query($result);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>CRUD Operation</title>
  <style>
  </style>
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
      <div class="col-md-8">
        <form action="" method="post">
          <br><br>
          <input type="text" class="form-control" placeholder="Please Enter Your Name" name="username">
          <br><br>
          <input type="password" class="form-control" placeholder="Please Enter Your Password" name="password">
          <br><br>
          <button type="submit" class="btn btn-primary" name="submit">Loging</button>

        </form>
        </div>
    </div>
  </div>
    

    <script src="js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>