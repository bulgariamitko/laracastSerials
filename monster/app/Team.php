<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	public function isOwnedBy(User $user)
	{
		return $this->owner_id == $user->id;
	}

    public function isMaxedOut()
    {
    	return false;
    }
}