<?php

namespace App\Http\Controllers;

class LifePersonsController extends Controller
{
	public function __construct()
	{
		$this->model = new \App\Models\LifePersons;

		$this->middleware('auth:api', [
			'except' => ['search', 'find'],
		]);

		$this->defaultRoutes();

		$this->route('get', 'life-persons/cycle', '@cycle');
	}

	public function cycle()
	{
		return \App\Utils\Life::cycle();
	}
}
