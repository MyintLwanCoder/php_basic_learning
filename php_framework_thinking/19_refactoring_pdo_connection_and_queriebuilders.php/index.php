<?php 
require "core/bootstrap.php";

$users=$query->selectAll("tasks");
dd($users);
require "index.view.php";