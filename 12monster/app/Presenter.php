<?php

namespace App;

abstract class Presenter
{
	protected $user;

	public function __construct($user)
	{
		$this->user = $user;
	}

	public function __get($property)
    {
        if (method_exists($this, $property)) {
            return call_user_func([$this, $property]);
        }

        $message = '%s does not respond to the "%s" property ot method.';

        throw new \Exception(sprintf($message, static::class, $property));
        
    }
}