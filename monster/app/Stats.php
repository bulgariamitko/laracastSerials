<?php

namespace App;

Class Stats
{
	protected $user;

	public function __construct($user)
	{
		$this->user = $user;
	}

	public function favourites()
    {
        // return $this->user->favorites()->count();
        return 15;
    }

    public function completions()
    {
        return 100;
    }

    public function experience()
    {
        return 22221;
    }
}