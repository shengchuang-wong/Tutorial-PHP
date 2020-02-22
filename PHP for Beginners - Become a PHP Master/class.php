<?php  

	// declare class
	class Car {

		// available for all program
		public $wheels = 4;

		// access by this class or subclasses, object cannot
		protected $hood = 1;

		// access by this class only, object cannot
		private $engine = 1;
		var $doors = 4;

		// static variable
		static $carAmount = 1;

		function MoveWheels() {
			// this -> $doors = 2;
			echo "Bum Bum Bum<br>";
		}

		function __construct() {
			echo "<br><br>Car Created".Car::$carAmount."<br><br>";
			Car::$carAmount++;
		}

	}

	// inheritance
	class Plane extends Car {
		// var $wheels = 2;
	}

	if (class_exists(Car)) {
		echo "Class Car Exist.";
	} else {
		echo "Car Not Exist.";
	}

	echo "<br>";

	if (method_exists("Car", "MoveWheels")) {
		echo "Car Method Exist.";
	} else {
		echo "Car Method Not Exist.";
	}

	echo "<br>";

	// create instances of class
	$bmw = new Car();

	// modify value
	$bmw -> wheels = 2;

	$merces_benz = new Car();

	// call function of class
	$bmw -> MoveWheels();
	$merces_benz -> MoveWheels();

	$jet = new Plane();
	echo $jet -> wheels."<br>";
	echo $jet -> wheels = 2;

	echo "<br><br>";

	// access static variable
	echo Car::$carAmount;

?>