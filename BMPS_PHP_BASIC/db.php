<?php 
    $connect=mysqli_connect('localhost','root','','loginapp');
    if(!$connect) {
    	die('Connected Failed');
    }