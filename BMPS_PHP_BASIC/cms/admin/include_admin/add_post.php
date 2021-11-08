<?php
    if(isset($_POST['create_post'])){
        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
        $post_category = $_POST['post_category_id'];
        $post_status = $_POST['post_status'];
        
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        
        $post_tag = $_POST['post_tag'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
       
        move_uploaded_file($post_image_temp,"../images/$post_image");
        
        $query ="INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_tag, post_status) ";
        $query .= "VALUES ($post_category,'$post_title','$post_author','$post_date', '$post_image','$post_tag','$post_status')";
        
        $result = mysqli_query($connect,$query);
        
        if(!$result){
            die('Query Failed'.mysqli_error($result));
        }
    }


?>
 <form action="" method="post" enctype="multipart/form-data">

     <div class="form-group">
         <label class="control-label">Post Title</label>
         <input type="text" class="form-control" name="post_title">
     </div>

     <div class="form-group"> 
     <label class="control-label">Post category</label>
         <select class="form-control" name="post_category_id">
             <?php
               $query = "SELECT * FROM categories";
               $result = mysqli_query($connect,$query);
               if (!$result) {
                   die('Query Failed' .mysqli_error($result));
               }
               while ($row = mysqli_fetch_assoc($result)) {
                   $cat_id = $row['cat_id'];
                   $cat_title = $row['cat_title'];
                   echo "<option value='$cat_id'>{$cat_title}</option>";
                ?>
                <?php
               }
             ?>
           </select>
         <!-- <input type="text" class="form-control" name="post_category_id"> -->
     </div>

     <div class="form-group">
         <label class="control-label">Post Author</label>
         <input type="text" class="form-control" name="post_author">
     </div>

     <div class="form-group">
         <label class="control-label">Post Status</label>
         <input type="text" class="form-control" name="post_status">
     </div>

     <div class="form-group">
         <label class="control-label">Post Image</label>
         <input type="file" name="image">
     </div>

     <div class="form-group">
         <label class="control-label">Post Tag </label>
         <input type="text" class="form-control" name="post_tag">
     </div>

     <div class="form-group">
         <label class="control-label">Post Content</label>
         <textarea name="post_content" cols="30" rows="10" class="form-control"></textarea>
     </div>

     <div class="form-group">
     <input type="submit" name="create_post" value="Publish Post" class="form-btn btn-primary">
     </div>

</form>
