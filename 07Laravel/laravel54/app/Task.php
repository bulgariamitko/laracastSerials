<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query, $val) // Task::incomplete
    {
    	return $query->where('completed', $val);
    }
}
