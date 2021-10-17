<?php 

   function result_query($result){
   	if (!$result) {
   		die('Query Failed'. mysqli_error());
   	}else{
   		echo "<h2 class='text-center'>Successfully Insert Data</h2>";
   	}
   }
