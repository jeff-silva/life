<?php

namespace App\Models;

class LifePersonsInteractions extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\Factories\HasFactory;
	use \App\Traits\Model;

	protected $table = 'life_persons_interactions';
	protected $fillable = ['id', 'name', 'type', 'person_from', 'person_to', 'created_at', 'updated_at', 'deleted_at'];


	public function getPersonFromAttribute()
	{
		if (!$this->attributes['person_from']) return null;
		return intval($this->attributes['person_from']);
	}


	public function getPersonToAttribute()
	{
		if (!$this->attributes['person_to']) return null;
		return intval($this->attributes['person_to']);
	}


	public function scopeWithPersons($query, $person1, $person2 = false)
	{
		if ($person1 AND $person2) {
			$query->where(function($q) use($person1, $person2) {
				$q->where(function($q) use($person1, $person2) {
					$q->where('person_from', $person1->id);
					$q->where('person_to', $person2->id);
				});
				$q->orWhere(function($q) use($person1, $person2) {
					$q->where('person_from', $person2->id);
					$q->where('person_to', $person1->id);
				});
			});
		}

		else if ($person1 AND !$person2) {
			$query->where(function($q) use($person1, $person2) {
				$q->where('person_from', $person1->id);
				$q->orWhere('person_to', $person1->id);
			});
		}

		return $query;
	}


	public function personFrom()
	{
		return $this->hasOne(LifePersons::class, 'id', 'person_from');
	}


	public function personFroms()
	{
		return $this->hasMany(LifePersons::class, 'id', 'person_from');
	}


	public function personTo()
	{
		return $this->hasOne(LifePersons::class, 'id', 'person_to');
	}


	public function personTos()
	{
		return $this->hasMany(\App\Models\LifePersons::class, 'id', 'person_to');
	}
}
