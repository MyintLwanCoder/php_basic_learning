<?php
    include_once "include/head.php";
    include_once "include/db.php";
?>
<br><br><br>
    <!-- Navigation -->
<?php include_once "include/nav.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php
                if (isset($_GET['p_id'])) {
                    $p_id = $_GET['p_id'];

                }
                $query ="SELECT * FROM posts WHERE post_id=$p_id";
                $result = mysqli_query($connect,$query);

                if(!$result){
                    die('Query Failed ' . mysqli_error($result));
                }

                while($row = mysqli_fetch_assoc($result)){
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
            ?>
                   <h2>
                        <a href="#"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="#"><?php echo $post_author; ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                    <hr>
                    <a href="#">
                        <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="" width=1000px>
                    </a>
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <hr>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
  
                    <hr>
            <?php
                    }
    
            ?>
            <!-- BLog Comments -->
            <?php
                if(isset($_POST['create_comment']))  {
                    $comment_post_id = $_GET['p_id'];
                    $comment_author = $_POST['comment_author'];
                    $comment_email = $_POST['comment_email'];
                    $comment_content = $_POST['comment_content'];
                   
                    $query = "INSERT INTO comment(comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
                    $query .= "VALUES ($comment_post_id,'$comment_author','$comment_email', '$comment_content','unapproved',now())";
                    
                    $result = mysqli_query($connect,$query);
                    if(!$result){
                        die('Query Failed'. mysqli_error($result));
                    }
                    $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                    $query .= "WHERE post_id = $comment_post_id";
                    $update_comment_count = mysqli_query($connect,$query);

                }
            ?>
            <!-- Comments Form -->
            <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="comment_author" class="form-control" placeholder="Please Enter You name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="comment_email" class="form-control" placeholder="Please Enter Your Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment_content" placeholder="Please Enter Your Comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>
                <?php 
               $comment_post_id = $_GET['p_id'];
                $query = "SELECT * FROM comment WHERE comment_post_id = $comment_post_id AND comment_status = 'approved'";
                $query .= "ORDER BY comment_id DESC";
                $result = mysqli_query($connect,$query);
                if(!$result){
                    die('Query Failed'. mysqli_error($result));
                }
                while ($row = mysqli_fetch_assoc($result)) {
                    $comment_author = $row['comment_author'];
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                ?>
                <div class="media">
                        <a class="pull-left">
                        <img class="media-object" src="http://placehold.it/64x64" alt="" >
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small><?php echo $comment_date; ?></small>
                    </h4>
                    <?php echo $comment_content; ?>
                        </div>
                </div>
                <hr>
                <?php
                }
                ?>
                    
                <hr>
    
            <!-- pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
                <?php ?>
                    <!-- for($i=1;$i<=$count;$i++){
                        if($i == $page){
                            echo "<li><a class='active_link' href='index.php?page=$i'>$i</a></li>";	    
                        }else{
                            echo "<li><a href='index.php?page=$i'>$i</a></li>";	
                        }

                        
                    } -->
                
                
               
            </ul>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

<?php include_once "include/sidebar.php" ?>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include_once "include/footer.php"; ?>               