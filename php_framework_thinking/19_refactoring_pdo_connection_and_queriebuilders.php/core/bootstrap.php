<?php

require "core/function.php";
require "core/Connection.php";
require "core/QueryBulider.php";
$config=require "config.php";
$query=new QueryBuilder(
    Connection::make($config['database'])
);