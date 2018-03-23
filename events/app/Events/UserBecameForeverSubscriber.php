<?php

namespace App\Events;

use Symfony\Component\EventDispatcher\Event;

Class UserBecameForeverSubscriber extends Event
{
	public $user;

	public function __construct($user)
	{
		$this->user = $user;
	}

	
}