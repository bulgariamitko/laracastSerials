<?php

namespace App\UseCases;

abstract class UseCases
{
	public static function perform()
	{
		return (new static)->handle();
	}

	abstract public function handle();
}