<?php

namespace App\Listeners;

use App\Events\UserBecameForeverSubscriber;
use Symfony\Component\EventDispatcher\Event;

class SendThankYouEmail extends Event
{
	public function handle(UserBecameForeverSubscriber $event)
	{
		echo "<pre>";
		print_r('send the email to ' . $event->user->name);
		echo "</pre>";	
	}	
}