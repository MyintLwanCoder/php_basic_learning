<?php 

function dd($data)
{
	echo "<pre>";
	die(var_dump($data));
}
function dbConnection()
{
	try{
		return $pdo=new PDO("mysql:host=localhost;dbname=todo", "root","");
	}catch(PDOException $e) {
		echo $e->getMessage(); //error msg
	}
}
function fetchTasks($pdo)
{
	$statement=$pdo->prepare("select * from tasks");
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_OBJ);
}