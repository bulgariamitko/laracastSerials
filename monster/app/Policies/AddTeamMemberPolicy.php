<?php

namespace App\Policy;

use App\Team;

Class AddTeamMemberPolicy
{
	protected $team;

	public function __construct(Team $team)
	{
		$this->team = $team;
	}


	public function allows()
	{
	    // if you are not sighed in, no way
    	if (auth()->guest()) {
    		abort(403, 'You are not signed in.');
    	}

    	// if you are not the owner of the team, no way
    	if ($this->team->owner_id != auth()->user()->id) {
    		abort(403, 'You are not the owner of this team.');
    	}

    	// if your team is maxed out, no way
    	if ($this->team->isMaxedOut()) {
    		abort(403, 'Your team is mixed out.');
    	}

    	return true;
	}
}