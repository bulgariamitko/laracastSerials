<?php

namespace Acme;

class FizzBuzz
{
    public function execute($number)
    {
    	if ($number % 15 == 0) return 'FizzBuzz';
    	if ($number % 3 == 0) return 'Fizz';
    	if ($number % 5 == 0) return 'Buzz';
        return $number;
    }

    public function executeUpTo($number)
    {
    	return array_map(function($i) {
    		return $this->execute($i);
    	}, range(1, $number));
    }
}
