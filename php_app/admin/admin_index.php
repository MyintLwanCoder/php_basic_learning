<?php
 include("style.php");
 include("../include/head.php");
 include("../include/nav.php");
 include("../include/header.php");?>
 <?php
include("../vendor/autoload.php");
use Libs\Database\Connection;
use Libs\Database\Users;

$dbconnect = new Connection();
    $dbh = $dbconnect->connect();
    $users = new Users($dbh);
    $userData = $users->getAll();
?>
 <div class="container">
     <div class="rwo">
     <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover table-condensed">
                <tr>
                        <td>ID</td>
                        <td>user name</td>
                        <td>email</td>
                        <td>phome</td>
                        <td>Action</td>
                        <tr>
                        <?php
                                    foreach ($userData as $user) {
                                        echo '<tr>';
                                        echo '<td>' . $user->id . '</td>';
                                        echo '<td>' . $user->username . '</td>';
                                        echo '<td>' . $user->email . '</td>';
                                        echo '<td>' . $user->phone . '</td>';
                                        //echo '<td>' . $user->password . '</td>';
                                        echo '<td>';
                                        echo '<a href="src/_actions/update.php?id=' . $user->id . '" class="btn btn-warning">update</a>';
                                        echo '<a href="src/_actions/delete.php?id=' . $user->id . '" class="btn btn-danger">delete</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                    </table>
                </div>
                

     <?php include('../include/right_sidebar.php')?>
     </div>
 </div>