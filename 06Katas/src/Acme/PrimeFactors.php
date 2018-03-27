<?php

namespace Acme;

class PrimeFactors
{
    public function generate($number)
    {
    	$primers = [];
    	
    	for ($candidate = 2; $number > 1; $candidate++) { 
	    	for (; $number % $candidate == 0; $number /= $candidate) { 
	    		$primers[] = $candidate;
	    	}
    	}
        return $primers;
    }
}
