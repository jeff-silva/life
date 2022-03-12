<?php

namespace App\Models;

class LifeEvents extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\Factories\HasFactory;
	use \App\Traits\Model;

	protected $table = 'life_events';

	protected $fillable = [
		'id',
		'slug',
		'name',
		'interaction_line',
		'eval',
		'chance',
		'created_at',
		'updated_at',
		'deleted_at',
	];
}
