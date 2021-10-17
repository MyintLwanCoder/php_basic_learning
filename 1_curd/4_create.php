<?php 
require_once('1_connection.php');
$name = $address = $salary = "";

$name_err = $address_err = $salary_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = trim($_POST["name"]);

    if (empty($input_name)) {
        $name_err = "Please enter a name";
    }elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    }else{
        $name = $input_name;
    }

    //address validation
    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
       $address_err = "please enter an address";
    }else{
        $address = $address_err;
    }

    //salary validation
    $input_salary = trim($_POST["salary"]);
    if (empty($input_salary)) {
        $salary_err = "Please Enter Salary amount";
    }elseif(!ctype_digit($input_salary)){
        $salary_err = "please enter a positive integer value";
    }else{
        $salary = $input_salary;
    }
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: 3_index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud employees data create form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Create employees Data</h2>
                <p>Please fill this form and submit to add employee record to the database.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="from-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>value="<?php echo $name; ?>">
                         <span class="invalid-feedback"><?php echo $name_err;?></span>

                    </div>

                    <div class="from-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?> value="<?php echo $address; ?>">

                         <span class="invalid-feedback"><?php echo $address_err;?></span>
                    </div>

       <div class="from-group">
                        <label for="salary">Salary</label>
                        <input type="text" name="salary" class="form-control" <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?> value="<?php echo $salary; ?>">
                         <span class="invalid-feedback"><?php echo $salary_err;?></span>
                    </div>
                    <div class="from-group mt-5">
                    <input type="submit" class="btn btn-primary" value="Create Data">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>