<div class="col-xs-12">
                  <table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Author</th>
                              <th>Title</th>
                              <th>category</th>
                              <th>Status</th>
                              <th>Image</th>
                              <th>Tag</th>
                              <th>Comment </th>
                              <th>Date</th>
                          </tr>
                      </thead>
                      <tbody>
            <?php 
                 $query = "SELECT * FROM posts";
                 $result = mysqli_query($connect,$query);
                 if (!$result) {
                     die('Query Failed' .mysqli_error($result));
                 }
                 while ($row = mysqli_fetch_assoc($result)) {
                  $post_id = $row['post_id'];
                  $post_author = $row['post_author'];
                  $post_title = $row['post_title'];            
                  $post_category = $row['post_category_id'];
                  $post_status = $row['post_status'];
                  $post_image = $row['post_image'];
                  $post_tag = $row['post_tag'];
                  $post_comment_count = $row['post_comment_count'];
                  $post_date = $row['post_date'];
                  echo "<tr>";
                  echo "<td>{$post_id}</td>";
                  echo "<td>{$post_author}</td>";
                  echo "<td>{$post_title}</td>";
                  $query = "SELECT * FROM categories WHERE cat_id=$post_category";
                  $category = mysqli_query($connect,$query);
                  if (!$category) {
                      die('Query Failed' .mysqli_error($category));
                  }
                  while($row = mysqli_fetch_assoc($category)) {
                      $cat_id = $row['cat_id'];
                      $cat_title = $row['cat_title'];
                      echo "<td>{$cat_title}</td>";  

                  }
                 // echo "<td>{$post_category}</td>";
                  echo "<td>{$post_status}</td>";
                  echo "<td>{$post_image}</td>";
                  echo "<td>{$post_tag}</td>";
                  echo "<td>{$post_comment_count}</td>";
                  echo "<td>{$post_date}</td>";
                  echo "<td><a href='post.php?source=edit_post&p_id={$post_id}'>Edit<?a></td>";
                  echo "<td><a href='post.php?delete={$post_id}'>Delete<?a></td>";
                  echo "</tr>";
              }
              ?>     
            <?php
            if(isset($_GET['delete'])){
                $cat_id = $_GET['delete'];
                $query ="DELETE FROM posts WHERE post_id=$post_id";
                $result = mysqli_query($connect,$query);
                if(!$result){
                    die('Query Failed'.mysqli_error($result));
                }
                header('Location: post.php');
            }
            ?>                    
    </tbody>    
    </table>
</div>