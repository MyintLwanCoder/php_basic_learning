<?php include('layouts/head.php') ?>

<body class="">
  <div class="wrapper ">
    <?php include('layouts/sidebar.php') ?>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include('layouts/nav.php') ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <!-- table start -->
            <div class="row">
           <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">mail_outline</i>
                  </div>
                  <h4 class="card-title">Category Create Form</h4>
                </div>
                <div class="card-body ">
                  <form method="POST" action="../src/_action/category_create_data.php">
                    <div class="form-group">
                      <label for="category" class="bmd-label-floating">Category Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end row -->
            <!-- end table -->
          </div>
        </div>
      </div>
     <?php include('layouts/footer.php') ?>
    </div>
  </div>
  <?php include('layouts/right_sidebar.php') ?>
  <?php include('layouts/scripts.php')?>