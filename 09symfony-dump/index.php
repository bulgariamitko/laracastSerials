<?php

require('vendor/autoload.php');

Class Tasks
{
	protected $tasks;

	public function __construct($tasks)
	{
		$this->tasks = $tasks;
	}
}

Class Task
{
	public $description;

	public function __construct($description)
	{
		$this->description = $description;
	}
}

$tasks = new Task([
	new Task('Go to the store'),
	new Task('Finish this screencast'),
	new Task('Destroy that guy who keeps spamming the form with Korean Casino links'),
]);

dump($tasks);