<?php

namespace App\Policies;

use App\Team;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamMemberPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        // do something before everything!!!
    }

    public function store(User $user, Team $team)
    {
        // if you are not the owner of the team, no way
        if (!$team->isOwnedBy($user)) {
            abort(403, 'You are not the owner of this team.');
        }

        // if your team is maxed out, no way
        if ($team->isMaxedOut()) {
            abort(403, 'Your team is mixed out.');
        }

        return true;
    }
}
