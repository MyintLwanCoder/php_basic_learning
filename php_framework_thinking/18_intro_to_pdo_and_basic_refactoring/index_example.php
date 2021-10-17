<?php 

//PDO
// require "function.php";
//dbConnection
// $pdo=dbConnection();
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "todo";

// $conn = new PDO("mysql:host=localhost;dbname=todo","root","");

// // if ($conn->connect_error) {
// //     die("connection failed: " . $conn->connect_error);
// // }
// //echo "connected successfully";
// $statement = $conn->prepare("SELECT * FROM tasks");
// $statement->execute();
// echo "<pre>";
// //print_r($stmt->fetchAll());
// var_dump($statement->fetchAll());
// try{

// $pdo=new PDO("mysql:host=localhost;dbname=todo","root","");
// }catch(PDOException $e){
//   echo $e->getMessage(); //error message
// }
// $statement=$pdo->prepare("select * from tasks");
// $statement->execute();
// $tasks=$statement->fetchAll(PDO::FETCH_OBJ);

// require "index.view.php";
// foreach ($tasks as $task) {
// 	echo $task;
// }
// echo"<pre>";
// print_r($tasks);
//print_r();return data