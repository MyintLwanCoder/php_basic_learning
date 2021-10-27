<?php 


 class Car {

 	var $wheel = 4 ;
 	var $door = 4 ;
 	protected  $sofa = 6 ;
     
 	function car_activity(){
	echo "Wheel = ";
   	echo $this -> wheel;
    echo "<br>";
	echo "Door = ";
   	echo $this -> door;
   	echo "<br>";
	echo "Sofa = ";
   	echo $this -> sofa;
    echo "<br>";
 	echo "This car is So beautiful This Car Name is BWM";
 	}
 }

 class Truck extends Car {
 	public $wheel = 12 ;
 	private $door = 6 ;
 	protected $sofa = 4;
 	function car_activity(){
 	 echo "This car is So beautiful This Car Name is Container";	
 	}
 }

class Truck extends Car {
	public $wheel = 12 ;
	private $door = 6;
	protected $sofa = 4;
	function car_activity(){

	}
}

 $bmw = new Car;

$container = new Truck

 echo $bmw -> car_activity(); 
 echo "<br>";
 $container -> car_activity();