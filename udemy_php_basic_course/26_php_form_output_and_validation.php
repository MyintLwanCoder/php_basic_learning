<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Form Output and validation</title>
</head>
<body>
	<?php 
    
    $name = $website = $position = $exprience = $estatus = $comments = "";

    if ($_SERVER["REOUEST_METHOD"] == "_POST") {
    	$name = val($_POST["name"]);
    	$website = val($_POST["website"]);
    	$position = val($_POST["position"]);
    	$exprience = val($_POST["exprience"]);
    	$estatus = val($_POST["estatus"]);
    	$comments = val($_POST["comments"]);

    }
    function val($data) {
    	$data = trim($data);
    	$data = stripslashed($data);
    	$data = htmlspecialchars($data);
    	return $data;

    }

	?>
	<form name="employet" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<table width="600" border="0" cellspacing="1" cellpadding="1">
			<tr>
				<td><h2>Employment Applcation</h2></td>
				<td></td>
			</tr>
			<tr>
			<td>Name</td>
			<td><input type="text" name="name" maxlength="50" /></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type="text" name="Website" maxlength="50" /></td>
		</tr>
		<tr>
			<td>Position</td>
		<td>
		  <select name="Position">
		  	<option value="Accountant">Accountant</option>
		  	<option value="Receptionist">Receptionist</option>
		  	<option value="Administrator">Administrator</option>
		  	<option value="Supervisor">Supervisor</option>
		  </select>
		</table>
	</td>
	</tr>
	<tr>
		<td>Experience Level</td>
		<td>
			
			<select name="experience">
				<option value="Entry Level">Entry Level</option>
				<option value="Some Experience">Some Experience</option>
				<option value="Very Experienced">Very Experienced</option>
				
			</select>
		</td>
	</tr>
	<tr>
		<td>Employment Status</td>
		<td>
			<input type="radio" name="estatus" value="employed" checked />Employe

			<input type="radio" name="estatus" value="unemployed"/>Unemployed

			<input type="radio" name="estatus" value="student" />Student
		</td>
	</tr>
	<tr>
		<td>Additional Comments</td>
		<td>
			
			<textarea name="Comments"cols="45" rows="5"></textarea>
		</td>
	</tr>
	<td>
		
		<input type="submit" name="submit" value="Submit" />
		<input type="reset" name="reset" value="Reset" />
	</td>
  </tr>
	</form>
	<?php 
    echo "<h2>User Input</h2>";
    echo "Name" . $name;
    echo "<br>";
    echo "Website" . $website;
    echo "<br>";
    echo "Position" . $position;
    echo "<br>";
    echo "Exprience" . $exprience;
    echo "<br>";
    echo "Estatus" . $estatus;
    echo "<br>";
    echo "Comments" . $comments;
	?>
</body>
</html>