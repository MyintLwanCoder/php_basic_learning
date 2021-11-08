<?php
    if(isset($_POST['create_user'])){
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $username = $_POST['username'];
        $user_role = $_POST['user_role'];
        $user_email = $_POST['user_email'];
        $user_password	 = $_POST['user_password'];
        
    //     $post_image = $_FILES['image']['name'];
    //     $post_image_temp = $_FILES['image']['tmp_name'];
        
        // $post_tag = $_POST['post_tag'];
        // $post_content = $_POST['post_content'];
        // $post_date = date('d-m-y');
       
    //     move_uploaded_file($post_image_temp,"../images/$post_image");
        
        $query = "INSERT INTO users(user_firstname,user_lastname,username,user_role,user_email,user_password)";
        $query .="VALUES('{$user_firstname}','{$user_lastname}','{$username}','{$user_role}','{$user_email}','{$user_password}')";
        $result = mysqli_query($connect,$query);
        if(!$result){
            die('Query Failed'.mysqli_error($result));
        }
   }
?>
 <form action="" method="post" enctype="multipart/form-data">

     <div class="form-group">
         <label class="control-label">Fisrst Name</label>
         <input type="text" class="form-control" name="user_firstname">
     </div>

     <div class="form-group">
         <label class="control-label">Last LastName</label>
         <input type="text" class="form-control" name="user_lastname">
     </div>

     <div class="form-group">
         <label class="control-label">Full Name</label>
         <input type="text" class="form-control" name="username">
     </div>

     <div class="form-group"> 
     <label class="control-label">User Role</label>
         <select class="form-control" name="user_role">
            <option value="subscriber">---Select User Role ---</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
           </select>
     </div>

     <!-- <div class="form-group">
         <label class="control-label">Post Image</label>
         <input type="file" name="image">
     </div> -->

     <div class="form-group">
         <label class="control-label">Email Adress</label>
         <input type="email" class="form-control" name="user_email">
     </div>

     <div class="form-group">
         <label class="control-label">Passowrd</label>
         <input type="password" class="form-control" name="user_password">
     </div>

     <div class="form-group">
     <input type="submit" name="create_user" value="Add User" class="form-btn btn-primary">
     </div>

</form>
