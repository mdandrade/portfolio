<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1> Some OOP tips </h1>
<?php

//The class keyword followed by the class name is used to declare a class.
/*  
class House {
	// code
}
*/

//Properties are variables, adding the public keyword in front of the variable will make the variable available everywhere.

class House {
	public $primaryColor = 'black';
	public $secondaryColors = [
		'bathroom' => 'white',
		'bedroom' => 'light pink',
		'kitchen' => 'light blue'
	];
	public $hasPool = false;
	public $extra;
}

//We can create multiple objects from a class. These objects are called instances of the class. This process is called instantiation.

//After the class declaration, you can create instances from it.

$myHouse = new House();
$friendHouse = new House();

//Now each object is created having the default values of the class. Tip: -> Is a bad practice to access it.

echo $myHouse -> primaryColor . "<br>";
echo $friendHouse -> primaryColor . "<br>";

//You can also change the default property values of the class to make each house unique.

$myHouse -> primaryColor = 'red';
$friendHouse -> primaryColor = 'yellow';

//In Object Oriented Programming in PHP, methods are functions inside classes.

//Let's declare a method inside a class named Example class to echo out a simple string that we give.

class Example {
	public function showIt($string) {
		echo $string;
	}
}
  
  $example = new Example();
  $example -> showIt('Hello Method! <br>');

//The thing you need to understand is that we call methods on objects, not classes.

//Changing a property value using methods:

class HouseA {
	public $primaryColor = 'black';
	public function changeColor($color) {
    $this -> primaryColor = $color;
    //$this refers to the current object.
	}	
}

// creates an object from the class
$myHouseA = new HouseA();

# black (default value)
echo $myHouseA -> primaryColor . "<br>";

// change the color of the house
$myHouseA -> changeColor('white');
	
# white
echo $myHouseA -> primaryColor . "<br>";

//A constructor is a public method which is named as __construct.

class ExampleConstruct {
	public function __construct() {
		// your constructor function
		echo "Hello Constructor <br>";
	}
}

//The __construct() method will be called once when you create an object from the class.

$example = new ExampleConstruct(); // will echo "Hello World"

//Better exemple:

class HouseConstruct {
	public $name;
	public $color;
	public function __construct($name, $color) {
		$this -> name = $name;
		$this -> color = $color;
	}
	public function echoData() {
		echo "The color of the {$this -> name} is {$this -> color}. And is much more easy say it with a __contructor. <br>";
	}
}

//If you have a constructor with arguments, you should send the values for those arguments when you create it.

$blackHouseConstruct = new HouseConstruct("John's House", "black");
$blackHouseConstruct -> echoData();

//A method declared without a visibility keyword will be public.
//Properties cannot be declared without a visibility keyword.


//In Object-Oriented Programming, when a class derives from another class, it is called inheritance.

//The child class inherits all the public and protected properties and methods from the parent class. Additionally, it can have its own properties and methods.

//class Tom extends Person {...} is the syntax for the child class.

class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age} <br>";
	}
}
/* Tom is inherited from Person */
class Tom extends Person {
	# __construct() is inherited
	# introduce() is inherited
	public function sayHello() {
    echo "Hello, extends! <br>";
	}
}
$tom = new Tom('Tom', 29);
$tom -> sayHello();
$tom -> introduce();

/*The main usage of protected is in inheritance. Protected variables are only available in:
The class where it is defined
The classes which inherit the defined class
By declaring a property or method protected, you can restrict it to the above-mentioned two classes.
*/

//From the child class, we can call parent's methods using the parent keyword and :: (Scope Resolution Operator)


//The const keyword is used to declare a class constant. The class constant should be declared inside the class definition. No $ (dollar sign) used.

class WelcomeConst {
	const GREET = 'Hello Const! <br>';
}
echo WelcomeConst::GREET;

$WelcomeConstExample = new WelcomeConst();

echo $WelcomeConstExample::GREET;

//The recommendation is to name constants in all uppercase and with underscore (_) separators. Ex: CONSTANT, MY_CONSTANT. Note that constants does not have a visibility modifier.

//Static methods can be called directly without needing an instance of the class (an object). And, $this pseudo-variable is not available inside static methods.

//Static methods and properties can be considered as escaping from Object-Oriented Programming.

class Hyvor {
	public static function getDevSiteDomain() {
		return 'Hyvor Developer <br>';
	}
}
echo Hyvor::getDevSiteDomain();


?>


</body>
</html>