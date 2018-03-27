<?php

namespace App;

use App\Presenter;

class UserPresenter extends Presenter
{
	public function welcomeMessage()
    {
    	// dd(get_class_methods($this->user));
        return sprintf(
            'Welcome, %s. You signed up %.',
            $this->user->name,
            $this->user->created_at->diffForHumans()
        );
    }
}