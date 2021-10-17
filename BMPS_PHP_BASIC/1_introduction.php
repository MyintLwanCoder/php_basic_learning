<?php 
// echo "Hello world";;

// echo "Hello Green Hackers";

// echo "Hello Students";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
?>