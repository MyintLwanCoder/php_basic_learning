<?php 
require "function.php";
//dbConnection
$pdo=dbConnection();

//fetchTask
$tasks = fetchTasks($pdo);
//var_dump($tasks);



require "index.view.php";

// $statement=$pdo->prepare("select * from tasks");
// $statement->execute();
// $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
 ?>