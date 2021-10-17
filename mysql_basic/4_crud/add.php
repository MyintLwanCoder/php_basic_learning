<?php 
 //include database file
include 'students.php';

$cunstomerObj = new Students();

//Insert Record in customer table
if (Insert($_POST['submit'])) {
	# code...
}
 ?>