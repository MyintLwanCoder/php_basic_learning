<?php 
 require_once('1_connection.php');

$sql = "INSERT INTO users(firsname, lastname, email)VALUES('Myint', 'lwin', 'Myintlwin@gmail.com'),
('Kyaw', 'Kyaw', 'KwayKyaw@gmail.com'),
('Zaw', 'Zaw', 'ZawZaw@gmail.com'),
('Aung', 'Aung', 'AunAung@gmail.com'),
('Aye', 'Aye', 'AyeAye@gmail.com')
";

if ($conn->query($sql) === TRUE) {
	echo "user table ထဲဒေတာထဲတာ အောင်မြင်ပါသည်";
}else{
	echo "ဒေတာထဲတာ မအောင်မြင်ပါ" . "<br>" . $conn->error;
}