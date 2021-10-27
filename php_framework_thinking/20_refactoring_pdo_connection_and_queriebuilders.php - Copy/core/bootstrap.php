<?php

require "core/function.php";
require "core/Router.php";
require "core/Request.php";
require "core/database/Connection.php";
require "core/database/QueryBulider.php";
$config=require "config.php";
$query=new QueryBuilder(
    Connection::make($config['database'])
);