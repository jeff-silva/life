<?php

namespace App\Models;

class LifePersons extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\Factories\HasFactory;
	use \App\Traits\Model;

	protected $table = 'life_persons';

	protected $fillable = [
		'id',
		'name',
		'gender',
		'photo',
		'money',
		'is_dead',
		'birth',
		'age',
		'father_id',
		'mother_id',
		'created_at',
		'updated_at',
		'deleted_at',
	];


	public function getBirthAttribute()
	{
		return floatval($this->attributes['birth']);
	}


	public function getFatherIdAttribute()
	{
		if (!$this->attributes['father_id']) return null;
		return intval($this->attributes['father_id']);
	}


	public function getMotherIdAttribute()
	{
		if (!$this->attributes['mother_id']) return null;
		return intval($this->attributes['mother_id']);
	}


	public function lifePersonsInteraction()
	{
		return $this->belongsTo(App\Models\LifePersonsInteractions::class, 'person_to', 'id');
	}


	public function father()
	{
		return $this->hasOne(LifePersons::class, 'id', 'father_id');
	}


	public function fathers()
	{
		return $this->hasMany(LifePersons::class, 'id', 'father_id');
	}


	public function lifePerson()
	{
		return $this->belongsTo(App\Models\LifePersons::class, 'mother_id', 'id');
	}


	public function mother()
	{
		return $this->hasOne(LifePersons::class, 'id', 'mother_id');
	}


	public function mothers()
	{
		return $this->hasMany(LifePersons::class, 'id', 'mother_id');
	}
}
