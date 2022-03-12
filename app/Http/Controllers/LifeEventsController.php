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
	}
}
