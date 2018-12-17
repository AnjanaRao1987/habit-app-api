<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['habit_id', 'date'];

    public function habit()
    {
    	return $this->belongsTo(Habit::class);
    }
}
