<?php 
 require_once('1_connection.php');

$sql = "INSERT INTO users(firstname, lastname, email)VALUES('Myint', 'lwin', 'Myintzon1624@gmail.com')";

if ($conn->query($sql) === TRUE) {
	echo "user table ထဲဒေတာထဲတာ အောင်မြင်ပါသည်";
}else{
	echo "ဒေတာထဲတာ မအောင်မြင်ပါ" . "<br>" . $conn->error;
}