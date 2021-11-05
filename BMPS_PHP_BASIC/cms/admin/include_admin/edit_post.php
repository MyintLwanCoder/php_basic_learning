<?php
  if(isset($_GET['p_id'])){
      $post_id = $_GET['p_id'];
      $query = "SELECT * FROM posts WHERE post_id=$post_id";
      $result=mysqli_query($connect,$query);
      if(!$result){
          die('Query Failed'.mysqli_error($result));
      }
      while($row = mysqli_fetch_assoc($result)){
          $post_title = $row['post_title'];
          $post_category = $row['post_category_id'];
          $post_author = $row['post_author'];
          $post_status = $row['post_status'];
          $post_image = $row['post_image'];
          $post_tag = $row['post_tag'];
          $post_content = $row['post_content'];
      }
  }
?>
<?php
 if(isset($_POST['update_post'])){
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    
    $post_tag = $_POST['post_tag'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;
    
    move_uploaded_file($post_image_temp,"../images/$post_image");
    if (empty($post_image)) {
        $query = "SELECT * FROM posts WHERE post_id = $post_id";
        $select_post_image = mysqli_query($connect,$query);
        while ($row = mysqli_fetch_assoc($select_post_image)) {
            $post_image = $row['post_image'];
        }
    }
    
    $query ="UPDATE posts SET post_category_id=$post_category,post_title='$post_title', post_author='$post_author',post_date=$post_date,post_image='$post_image', post_content='$post_content',post_tag='$post_tag',post_comment_count=$post_comment_count, post_status='$post_status' WHERE post_id = $post_id ";
    $result = mysqli_query($connect,$query);
    
    if(!$result){
        die('Query Failed'.mysqli_error($result));
    }
}
 
?>
<form action="" method="post" enctype="multipart/form-data">
     <div class="form-group">
         <label class="control-label">Post Title</label>
         <input type="text" class="form-control" name="post_title" value="<?php echo $post_title?>">
     </div>

     <div class="form-group">
         <label class="control-label">Post category Id</label>
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
            ?>
            <option value='$cat_id'><?php echo $cat_title?></option>
            <?php
            }
             ?>
              
         </select>
         <!-- <input type="text" class="form-control" name="post_category_id"value="<?php //echo $post_category?>"> -->
     </div>

     <div class="form-group">
         <label class="control-label">Post Author</label>
         <input type="text" class="form-control" name="post_author" value="<?php echo $post_author?>">
     </div>

     <div class="form-group">
         <label class="control-label">Post Status</label>
         <input type="text" class="form-control" name="post_status" value="<?php echo $post_status?>">
     </div>

     <div class="form-group">
         <label class="control-label">Post Image</label>
         <input type="file" name="image">
         <br>
         <img src="../images/<?php echo $post_image ?>" alt="" width= "300px">
     </div>

     <div class="form-group">
         <label class="control-label">Post Tag </label>
         <input type="text" class="form-control" name="post_tag" value="<?php echo $post_tag?>">
     </div>

     <div class="form-group">
         <label class="control-label">Post Content</label>
         <textarea name="post_content" cols="30" rows="10" class="form-control">
         <?php echo $post_content?>
        </textarea>
     </div>

     <div class="form-group">
     <input type="submit" name="update_post" value="Update Post" class="form-btn btn-primary">
     </div>

</form>