<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   	protected $fillable = [
		'title', 'description', 'donations', 'type', 'goal',  'location', 'author', 'tag',
	]; 

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}	
}
