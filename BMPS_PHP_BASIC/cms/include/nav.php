<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get rrouped for better mobile display -->
        <div class="navbar-header">
            <button tyep="button" class="navbar-toggle" data-toggle="collapse" data-traget="#bs-example-navbar-collapase-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- collect the links, forms and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                $query = "SELECT * FROM categories";
                $result = mysqli_query($connect,$query);

                if(!$result){
                    die("Query Failed . mysqli_error($result");
                }

            while ($row = mysqli_fetch_assoc($result)) {
                $cat_id =$row['cat_id'];
                $cat_title =$row['cat_title'];
            
                ?>
            <li>
                <a href="#"><?php echo  $cat_title ?></a>
            </li>
            <?php
            }
            ?>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>