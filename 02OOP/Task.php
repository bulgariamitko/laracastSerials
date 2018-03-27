<?php 

# Class

Class Task {
	public $title;
	public $description;
	public $completed = false;

	public function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task('Learn', 'Learn OOP');
$task2 = new Task('Store', 'Pick up groceries');

var_dump($task);