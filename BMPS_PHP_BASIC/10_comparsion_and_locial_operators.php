<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php 
    //  $username = "mgmg";
    //   $password = 123456;
    //
    //   if($password == "123456") {
	//    echo "welcome To My Site";
    //  }else{
	//    echo "Try Again";
	//}

	  $username = "mgmg";
	  $password = 123456;

	  if ($username == "mg" and $password == 123456) {
	  	   echo "welcome to my site";
	  }else if ($username == "mg" or $password == "12345") {
	  	echo "Please Check Your User Name Or password";
	  }else{
	  	  echo "Try Again";
	  }


	?>
</body>
</html>


<!-- and => true true true
       true false false
       false true  false
       false false false -->

<!-- or   => true true true
        true false true
        false true true 
        false false false -->