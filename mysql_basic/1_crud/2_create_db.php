<?php
require_once('1_connection.php');

$sql = "CREATE DATABASE mysql_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}else{
    echo "Error creating Database" . $conn->error;
}
$conn->close();