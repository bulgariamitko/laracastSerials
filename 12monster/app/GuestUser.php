<?php

namespace App;

class GuestUser extends User
{
	public $name = 'Guest';

	public function isSubscribed()
    {
        return null;
    }
}