<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    protected $fillable = ['name', 'category', 'description', 'frequency', 'period', 'motivation'];
    public function logs()
    {
    	return $this->hasMany(Log::class);
    }
}
