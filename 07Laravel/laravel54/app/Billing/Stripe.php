<?php

namespace App\Billing;

Class Stripe
{
	protected $key;

	public function __construct($key)
	{
		
		$this->key = $key;
	}
}