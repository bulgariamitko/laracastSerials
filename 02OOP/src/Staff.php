<?php 

namespace Acme;

use Acme\Users\Person;

Class Staff {
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function getMembers()
	{
		return $this->members;
	}
}