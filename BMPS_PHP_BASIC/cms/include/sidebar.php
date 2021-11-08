<?php include_once "include/db.php";?>

<!-- Blog Search Well -->
<div class="well">
                  <?php
                 if (isset($_POST['search'])) {
                    $search = $_POST['search'];
                    $result = mysqli_query($connect,$query);
                    if (!$result) {
                        die('Query Failed' . mysqli_error($result));
                    }
           
                    $count = mysqli_num_rows($result);
                    if ($count > 0) {
                        echo "Success Processing";
                    }else{
                        echo "<h1>No Result<h1>";
                    }
                }

                     ?>
            <h4>Blog Search</h4>
            <form action="search.php" method="post">
            <div class="input-group">
                <input type="text" class="form-control" name="search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div> 
        </form>
       
            <!-- /.input-group -->
           
        </div>
        <!-- Blog Categories Well -->
         <div class="well">
            <h4>Blog Categories</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <?php
                          $query = "SELECT * FROM categories";
                          $result = mysqli_query($connect,$query);
                          if (!$result) {
                            die('Query Failed' .mysqli_error($result));
                          }

                          while ($row =mysqli_fetch_assoc($result)) {
                              $cat_id = $row['cat_id'];
                              $cat_title = $row['cat_title'];
                              ?>
                              <li>
                                  <a href="category.php?category=<?php echo $cat_id ?>"><?php echo $cat_title ?></a>
                              </li>
                         <?php
                          }
                        ?>
                    </ul>
                </div>
                <!-- /col-lg-6 -->
            </div>
                 <!-- /col-lg-6 -->
            </div>
            <!-- /.row -->
          </div>

          <!-- side widget well -->
          <div class="well">
              <h4>Side widget well</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit facilis quia quidem et architecto quasi aliquid expedita soluta necessitatibus, debitis rem temporibus adipisci provident consectetur aperiam rerum mollitia magnam. Quo.</p>
          </div>
        </div>
        