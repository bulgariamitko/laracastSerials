<?php 

#Getters and Setters

Class Person {
	private $name;
	private $age;

	function __construct($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age) {
		if ($age < 18) {
			throw new Exception("Person is not old enough");
			
		}

		$this->age = $age;
	}
}

$john = new Person('John Doe');
$john->setAge(30);

var_dump($john->getAge());

#public = visible for all the code
#protected = visible only when you extend the class
#private = visible only within the class

// Sublime shortcuts:
// 	- Jump to closing brackets: Control+M
// 	- Wrap selected in a tags: Control+Shift+G
// 	- Add path to Class - F10; Add the path - F9; Add contructor - F7
// 	- Toggle sidebar: Control+K+B
// 	- Browse any file: Control+P
// 	- Browse methods and functions: Control+R
// 	- Browse methods and functions from all files: Control+Shift+R
// 	- Advance new file creaton: Control+Alt+N (: will save the new file in the same dirrectory)
// 	- Opens up new tab on the right - Control+K, Control+Right
// 	- Opens up new tab on the bottom - Control+K, Control+Down
// 	- Destroy the current open tab - Control+K, Control+D