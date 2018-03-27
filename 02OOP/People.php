<?php 

#Messages

Class People {
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

Class Business {
	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(People $person)
	{
		$this->staff->add($person);
	}

	public function getStaffMembers()
	{
		return $this->staff->getMembers();
	}
}

Class Staff {
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(People $person)
	{
		$this->members[] = $person;
	}

	public function getMembers()
	{
		return $this->members;
	}
}

$dimo = new People('Dimo Padalski');
$staff = new Staff([$dimo]);

$laracast = new Business($staff);

$laracast->hire(new People('Galka'));

var_dump($laracast->getStaffMembers());