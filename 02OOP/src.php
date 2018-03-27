<?php 

#namespacing and autoloading

use Acme\Users\Person;
use Acme\{Business, Staff};

$dimo = new Person('Dimo Padalski');
$staff = new Staff([$dimo]);

$laracast = new Business($staff);

$laracast->hire(new Person('Galka'));

var_dump($laracast->getStaffMembers());