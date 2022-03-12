<?php

namespace App\Models;

class LifeWorlds extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\Factories\HasFactory;
	use \App\Traits\Model;

	protected $table = 'life_worlds';
	protected $fillable = ['id', 'slug', 'name', 'year_seconds', 'created_at', 'updated_at', 'deleted_at'];


	public function lifePerson()
	{
		return $this->belongsTo(App\Models\LifePersons::class, 'world_id', 'id');
	}
}
