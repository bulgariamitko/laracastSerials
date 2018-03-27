<?php

namespace App;

use App\UserPresenter;
use App\Events\UserRegistered;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Completable;
    use ParticipatesInForum;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function register($attributes)
    {
        $user = static::create($attributes);
        event(new UserRegistered($user));
        return $user;
    }

    public function stats()
    {
        return new Stats($this);
    }

    public function isAdmin()
    {
        return $this->id == 1;
    }

    public function isSubscribed()
    {
        return $this->exists;
    }

    public function present()
    {
        return new UserPresenter($this);
    }
}