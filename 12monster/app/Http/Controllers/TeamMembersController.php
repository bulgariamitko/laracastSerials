<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
// use App\Policy\AddTeamMemberPolicy;

class TeamMembersController extends Controller
{
    public function store(Team $team)
    {
    	// 1 way - make checks
		// (new AddTeamMemberPolicy($team))->allows();

		// 2 way - using laravel policy class
		$this->authorize($team); // 1 way - it will execute store method maggically
		$this->authorize('store', $team); // 2 way - say which method to run

    	return 'Add the user to the team.';
    }
}