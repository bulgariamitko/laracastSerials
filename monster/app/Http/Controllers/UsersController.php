<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
	/**
	* Register a user
	*
	* @event App\Events\UserRegister
	**/
    public function store()
    {
    	User::register([
	    	'name' => 'Mitko',
	    	'email' => 'mitko@mitko.com',
	    	'password' => bcrypt('mitko'),
    	]);

    	// Schedule a follow-up email.

    	// Update your stats, payments.
    }
}
