<?php
include("../../vendor/autoload.php");
use Libs\Database\Connection;
use Libs\Database\Category;

$data = [
    'name' => $_POST['name'] ?? 'Unknow'
];

$dbconnect = new Connection();
$dbh = $dbconnect->connect();
$category = new Category($dbh);
if ($category) {
    $category->CategoryInsert($data);
    header('Location: ../../../../admin/category_index.php');
}else {
    echo "Error";
}