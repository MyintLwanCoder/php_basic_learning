<?php 

   function result_query($result){
   	if (!$result) {
   		die('Query Failed'. mysqli_error());
   	}
   }