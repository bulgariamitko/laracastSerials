<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'body'];

    // if i want to hide fields
    // protected $hidden = ['title'];

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
