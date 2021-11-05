<?php 
include("include/head.php");
include("include/nav.php");
include("include/header.php");
?>
<div class="container">
    <div class="row">
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-6">
                    <form id="RegisterValidation" action="src/_action/login.php" method="POST">
                        <div class="card">
                        <div class="div card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">mail_outline</i>
                            </div>
                            <h4 class="card-title">Login Form</h4>
                        </div>        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email" class="bmd-label-floating">Email Adress*</label>
                                <input type="text" name="email" class="form-control"required="true">
                            </div>
                            <div class="form-group">
                                <label for="password" class="bmd-label-floating">Password *</label>
                                <input type="text" name="password" class="form-control"required="password">
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-rose">Login</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
<?php include('include/right_sidebar.php')?>
    </div>
</div>

