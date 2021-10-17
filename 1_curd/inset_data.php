<?php 
 require_once('1_connection.php');

$sql = "INSERT INTO php_crud(Myintlwin, Mandaly, '500000')VALUES('Myint','lwin', 'Myintlwin@gmail.com'),
('Kyaw', 'Yangon', '200000'),
('Kyaw', 'Naypyidaw', '12345'),
('Kyaw', 'Pyinoolwin', '2300000'),
('Kyaw', 'Moywa', '22300000'),";

if ($conn->query($sql) === TRUE) {
	echo "user table ထဲဒေတာထဲတာ အောင်မြင်ပါသည်";
}else{
	echo "ဒေတာထဲတာ မအောင်မြင်ပါ" . "<br>" . $conn->error;
}