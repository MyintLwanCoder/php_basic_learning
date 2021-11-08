<div class="col-xs-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>First Name</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Approve </th>
                    <th>Unapprove</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
<?php 
        $query = "SELECT * FROM users";
        $result = mysqli_query($connect,$query);
        if (!$result) {
            die('Query Failed' .mysqli_error($result));
        }
        while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];     
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];   
    
        echo "<tr>";
        echo "<td>{$user_id}</td>";
        echo "<td>{$username}</td>";
        echo "<td>{$user_firstname}</td>";
        echo "<td>{$user_lastname}</td>";
        echo "<td>{$user_email}</td>";
        echo "<td>{$user_role}</td>";
        // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
        // $select_post_id_query = mysqli_query($connect,$query);
        // if (!$select_post_id_query) {
        //     die('Query Failed' .mysqli_error($connect));
        // }
        // while ($row = mysqli_fetch_assoc($select_post_id_query)) {
        //     $post_id = $row['post_id'];
        //     $post_title = $row['post_title'];
        //     echo "<td><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";
        // }
        // echo "<td>{$comment_date}</td>";
        
        // $query = "SELECT * FROM categories WHERE cat_id=$post_category";
        // $category = mysqli_query($connect,$query);
        // if (!$category) {
        //     die('Query Failed' .mysqli_error($category));
        // }
        // while($row = mysqli_fetch_assoc($category)) {
        //     $cat_id = $row['cat_id'];
        //     $cat_title = $row['cat_title'];
        //     echo "<td>{$cat_title}</td>";  

        // }
        // echo "<td>{$post_category}</td>";
        echo "<td><a href='user.php?admin=$user_id'>Adnim<?a></td>";
        echo "<td><a href='user.php?subscriber=$user_id'> Subscriber<a></td>";
        echo "<td><a href='user.php?source=edit_user&edit=$user_id'>Edit<?a></td>";
        echo "<td><a href='user.php?delete=$user_id'>Delete<?a></td>";
        echo "</tr>";
    }
    ?>     
<?php
//unapprove
if(isset($_GET['subscriber'])){
    $user_id = $_GET['subscriber'];
    $query ="UPDATE users SET user_role = 'subscriber' WHERE user_id=$user_id";
    $result = mysqli_query($connect,$query);
    if(!$result){
        die('Query Failed'.mysqli_error($result));
    }
    header('Location: user.php');
}
//approve
if(isset($_GET['admin'])){
    $user_id = $_GET['admin'];
    $query ="UPDATE users SET user_role = 'admin' WHERE user_id=$user_id";
    $result = mysqli_query($connect,$query);
    if(!$result){
        die('Query Failed'.mysqli_error($result));
    }
    header('Location: user.php');
}
//delete
if(isset($_GET['delete'])){
    $user_id = $_GET['delete'];
    $query ="DELETE FROM users WHERE user_id=$user_id";
    $result = mysqli_query($connect,$query);
    if(!$result){
        die('Query Failed'.mysqli_error($result));
    }
    header('Location: user.php');
}
?>                    
</tbody>    
</table>
</div>