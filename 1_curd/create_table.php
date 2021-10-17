<?php 
require_once('1_connection.php');
$sql = "CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


if ($conn->query($sql) == TRUE) {
    echo "Table users created successfully";
}else{
    echo "Error crateing table:" .$conn->error;
}
$conn->close(); ?>