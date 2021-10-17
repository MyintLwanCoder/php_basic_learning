<?php 

// class Car
// {
// 	public function drive()
// 	{
// 		echo "car is driving";
// 	}
// 	public function stop()
// 	{
// 		return "car is stop";
// 	}
// 	public function whatIsThis()
// 	{
// 		return new $this;//new Car
// 	}
// }						
// $car1=new Car;
// $car1->drive();
// echo $car1->stop(); //"car is stop"
//var_dump($car1->whatIsThis()->stop());

class Car
{
    public static function startEngin()
	{
		echo "start  engin. ";
		return new Car;
	}
	public function drive()
	{
		echo "car is driving. ";
		return $this;
	}
    public function stop()
   {		
   	echo "car is stop";
   }

	public function whatIsThis()
	{
		return $this;
	}
}				
Car::startEngin()->drive()->stop();	