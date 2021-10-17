<?php 

require "index.view.php";

class Car
{
    public static function love()
	{
		echo "Myint lwin ";
		return new Car;
	}
	public function Myint()
	{
		echo "love  ";
		return $this;
	}
    public function zon()
   {		
   	echo "zon lay Thant";
   }

	public function whatIsThis()
	{
		return $this;
	}
}	
Car::love()->Myint()->zon();


