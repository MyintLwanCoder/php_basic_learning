<?php 

class Car
{
	// private function drive()
	// {
	// 	echo "car is drive";
	// }
	// protected function drive()
	// {
	// 	echo "car is drive";
	//$this->$carName=$carName;
	// }
	// public function __construct($carName)
	// {
protected $carName; //marcity
public function __construct($carName)
{
	$this->carName=$carName;
}
protected function drive()
 {
 	echo "$this->carName is drive";
 }
public function getDrive()
{
	$this->drive();
}
}
$car=new Car("lambo");
$car->getDrive();
echo "<br>";
echo "Myint lwin";
echo "<br>";
echo "Myint lwin";
//$car->getDrive();