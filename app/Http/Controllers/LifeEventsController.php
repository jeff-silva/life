<?php

namespace App\Http\Controllers;

class LifeEventsController extends Controller
{
	public function __construct()
	{
		$this->model = new \App\Models\LifeEvents;

		$this->middleware('auth:api', [
			'except' => ['search', 'find'],
		]);

		$this->defaultRoutes();

		$this->route('get', 'life-events/test/{id}', '@test');
	}

	
	public function test($id)
	{
		if ($event = \App\Models\LifeEvents::find($id)) {
			$person_from = \App\Models\LifePersons::inRandomOrder()->first();
			$person_to = \App\Models\LifePersons::inRandomOrder()->first();
			return $event->run($person_from, $person_to);
		}

		return false;
	}
}
