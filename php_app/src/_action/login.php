<?php
session_start();
include('../../vendor/autoload.php');
use Libs\database\Connection;
use Libs\database\Users;

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $dbconnect = new Connection();
    $dbh = $dbconnect->connect();
    $users = new Users($dbh);
$data = $users->findByEmailAndPassword($email, $password);
if ($data) {
    $_SESSION['data'] = $data;
    // $_SESSION['user_name'] = $data['name'];
    // $_SESSION['user_email'] = $data['email'];
    header('location: ../../../../admin/dashboard.php');
} else {
    header('location:../../../../loginform.php');
}
?>