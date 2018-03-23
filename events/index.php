<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Events\UserSignedUp;
use App\Listeners\SendThankYouEmail;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;

require('vendor/autoload.php');

$dispatcher = new EventDispatcher;

// catching the event
// $dispatcher->addListener(UserSignedUp::class, function (Event $event) {
// 	echo "<pre>";
// 	print_r($event);
// 	echo "</pre>";
// });

// $event = new UserSignedUp((object)['name' => 'Joe', 'email' => 'joe@example.com']);

$listener = new SendThankYouEmail;

// broadcasting the event
$dispatcher->addListener(UserSignedUp::class, [$listener, 'handle']);