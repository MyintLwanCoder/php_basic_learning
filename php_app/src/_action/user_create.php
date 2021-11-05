<?php
include('../../vendor/autoload.php');
use Libs\database\Connection;
use Libs\database\Users;

    $data = [
        'username' => $_POST['username'] ?? 'Unknown',
        'email' => $_POST['email'] ?? 'Unknown',
        'password' => md5($_POST['password']),
        'phone' => $_POST['phone'] ?? 'Unknown'
    ];
    $dbconnect = new Connection();
    $dbh = $dbconnect->connect();
    $users = new Users($dbh);
if ($users) {
    $users->insert($data);
    // header('Location: ../../../../index.php');
    header('Location: ../../../../admin/user_index.php');
} else {
    echo "Error";
}