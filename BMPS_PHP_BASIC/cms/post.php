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
                    $post_content = substr($row['post_content'],0,200);
            ?>
                   <h2>
                        <a href="#"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="#"><?php echo $post_author; ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                    <hr>
                    <a href="#">c
                        <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="" width=1000px>
                    </a>
                    
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
            <?php
                    }
    
            ?>
            <!--comment  -->
            <div class="media">
            <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="" >
                </a>
                div
            </div>
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="" >
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Start Bootstrap
                        <small>Auguse 25, 2014 at 9:30 PM</small>
                    </h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, maxime. Aliquid laboriosam nobis autem nesciunt ab rem accusamus suscipit? Quam itaque temporibus nihil velit soluta voluptas provident ipsa, rem excepturi.
                    <!-- Nested comment -->
                    <div class="media">
                        <a class="pull-left">
                        <img class="media-object" src="http://placehold.it/64x64" alt="" >
                        </a>
                        <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                        <small>Auguse 25, 2014 at 9:30 PM</small>
                    </h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, maxime. Aliquid laboriosam nobis autem nesciunt ab rem accusamus suscipit? Quam itaque temporibus nihil velit soluta voluptas provident ipsa, rem excepturi.
                        </div>
                    </div>
                    <!-- emd Nested -->
                </div>
            </div>
            <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="post">
                       <div class="form-group">
                           <input type="text" name="comment_author" class="form-control" placeholder="Please Enter Your Name">
                       </div>
                           <div class="form-group">
                           <input type="email" name="comment_email" class="form-control" placeholder="Please Enter Your Email Address">
                       </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment_content" placeholder="Please Enter Your Comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>

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
                