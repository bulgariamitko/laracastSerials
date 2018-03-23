<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Listeners\SendThankYouEmail;
use App\Events\UserBecameForeverSubscriber;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;

require('vendor/autoload.php');

// Service Provider
$dispatcher = new EventDispatcher;

// $dispatcher->addListener(UserBecameForeverSubscriber::class, function(UserBecameForeverSubscriber $event) {
// 	echo "<pre>";
// 	print_r('send a thank you email to ' . $event->user->name);
// 	echo "</pre>";
// });

// Event Service Provider
$listener = new SendThankYouEmail;

$dispatcher->addListener(UserBecameForeverSubscriber::class, [$listener, 'handle']);

// The part of the controller where you upgrade the user forever
$event = new UserBecameForeverSubscriber((object)['name' => 'Samantha']);
$dispatcher->dispatch(UserBecameForeverSubscriber::class, $event);