<?php include_once "include/head.php" ?>
<?php include_once "include/db.php"?>
<!-- Navigation -->


<?php include_once "include/nav.php" ?>
<!-- page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

         <?php
             $query="SELECT * FROM posts";
             $result = mysqli_query($connect,$query);

             if (!$result) {
               die('Query Failed ' . mysqli_error($result));     
             }

             while ($row = mysqli_fetch_assoc($result)) {
                 $post_title = $row['post_title'];
                 $post_author = $row['post_author'];
                 $post_date = $row['post_date'];
                 $post_images = $row['post_images'];
                 $post_content = $row['post_content'];
                ?>
                 <h2>
                 <a href="#"><?php echo $post_title; ?></a>
             </h2>
             <p class="lead">
                 by <a href="index.php"><a href="#"><?php echo $post_author; ?></a></a>
             </p>
             <p><span class="glyphicon glyphicon-time"></span>2021-11-27</p>
             <hr>
             <img class="img-responsive" src="images/<?php echo $post_images ?>" alt="">
             <hr> 
             <p><a href="#"><?php echo $post_content; ?></a></p>
             <a class="btn btn-primary"  href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
             <hr>
             <hr>
             <!-- Pager -->
             <ul class="pager">
                 <li class="previous">
                     <a href="#">&larr; Older</a>
                 </li>
                 <li class="next">
                     <a href="#">Newer &rarr;</a>
                 </li>
             </ul>
     
             </div>
             <!-- Blog Sidebar Widgets Column -->
             <div class="col-md-4">
             <?php include_once "include/sider.php"?>
             </div>
             </div>
             
         <!-- /.row -->
     
         <hr>
         <?php

             }
         
         ?>
        <!--  Blog Post -->
        

    <!-- footer -->  
    <?php include_once "include/sider.php"?>
    <?php include_once "include/footer.php"?>

    