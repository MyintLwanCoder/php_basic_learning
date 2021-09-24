<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP String</title>
</head>
<body>
	<p>
	<?php 
    //Create the class 
    class Person {
    	//Create Properties - (variables tied to bojects)
    	public $firstname;
    	public $lastname;
    	public $age;

    	//Assigning values to the Propertly variables
    	public function_construct($firstname, $lastname, $age) {
    		$this->firstname = $firstname;
    		$this->lastname = $lastname;
    		$this->age = $age;

    		//create a Method (function tied to an Object)
    		public function hello() {
    			return "I am " . $this->firstname . " " . $this->lastname . " , my age is: "  . $this->age = $age;
    		}

    	}

    	//Creating a new person named "John Smith", Who is 25 years old 
    	$person1 = new Person('John', 'Smith', 25);
    	$person2 = new Person('Joe', 'Bob', 35);

    	//print out what the hello method returns
    	echo $person1->hello();
    	echo "<br>";
    	echo $person2->hello();
    }
	?>
	</p>
</body>
</html>