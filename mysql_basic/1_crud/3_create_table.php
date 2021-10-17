<?php
require_once('1_connection.php');

// $sql = "CREATE TABLE users(
//       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//       firsname VARCHAR(200) NOT NULL,
//       lastname VARCHAR(200) NOT NULL,
//       email VARCHAR(200) NOT NULL,
//       reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )"; 
$sql = "CREATE TABLE lists(
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      title VARCHAR(200) NOT NULL,
      category_id VARCHAR(200) NOT NULL,
      body TEXT(2000) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)"; 
if ($conn->query($sql) == TRUE) {
	echo "Table users created successfully";
}else{
	echo "Error crateing table:" .$conn->error;
}
$conn->close();