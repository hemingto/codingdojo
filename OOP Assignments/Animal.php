<?php 

class Animal {

	public $name;
	public $health;
	public function __construct($name) {
		$this->name = $name;
		$this->health = 100;
	}
	public function walk() {
		$this->health -=1;
		return $this;
	}
	public function run() {
		$this->health -=5;
		return $this;
	}
	public function displayHealth() {
		echo $this->name . "</br>";
		echo $this->health . " " . "health";
		echo "</br>";
		echo "</br>";
		return $this;
	}
}

$animal = new Animal("Cheetah");

$animal->walk()->walk()->walk()->run()->run()->displayHealth();

class Dog extends Animal 
{
	public function __construct() {
		$this->name = "Dog";
		$this->health = 150;
	}
	public function pet() {
		$this->health +=5;
		return $this;
	}
}

$dog = new Dog;

$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();


class Dragon extends Animal 
{
	public function __construct() {
		$this->name = "Dragon";
		$this->health = 170;
	}
	public function fly() {
		$this->health -=10;
		return $this;
	}
	public function displayHealth() {
		echo "This is a dragon! </br>";
		parent::displayHealth();

	}
}

$dragon = new Dragon;

$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();


?>