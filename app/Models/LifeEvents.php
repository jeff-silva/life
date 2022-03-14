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
		'text_success',
		'text_error',
		'eval',
		'chance',
		'created_at',
		'updated_at',
		'deleted_at',
	];


	public function run($person_from, $person_to = null)
	{
		if (!$person_from) return;
		if ($person_from==$person_to) return;
		$save['person_from'] = $person_from->id;
		$save['person_to'] = $person_to? $person_to->id: null;

		if ($this->chance AND 0==rand(0, $this->chance)) {
			$save['name'] = collect(explode("\n", $this->text_error))->random();
			$save['name'] = $save['name']? $save['name']: 'error';
		}
		else {
			$eval = eval($this->eval);
			$save['type'] = $this->slug;
			$save['person_from'] = $person_from->id;
			$save['person_to'] = $person_to? $person_to->id: null;
			$save['name'] = collect(explode("\n", $this->text_success))->random();
			$save['name'] = $save['name']? $save['name']: 'success';
		}

		if (!$save['person_from']) return;
		return new LifePersonsInteractions($save);
	}
}
