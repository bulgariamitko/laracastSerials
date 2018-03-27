<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	// fills that you will allow from the form
    protected $fillable = ['title', 'body', 'post_id', 'user_id', 'password'];

    // fills that you dont want to allow from the form
    protected $guarded = [];
}