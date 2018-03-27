<?php 

Class Person {
	public $age = 1;

	public function haveBirthday()
	{
		$this->age += 1;
	}

	public function getAge()
	{
		return $this->age;
	}
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

var_dump($joe->getAge());

$jane = new Person;
$jane->haveBirthday();

var_dump($jane->getAge());