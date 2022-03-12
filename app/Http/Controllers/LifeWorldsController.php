<?php

namespace App\Http\Controllers;

class LifeWorldsController extends Controller
{
	public function __construct()
	{
		$this->model = new \App\Models\LifeWorlds;

		$this->middleware('auth:api', [
			'except' => ['search', 'find'],
		]);
	}
}
