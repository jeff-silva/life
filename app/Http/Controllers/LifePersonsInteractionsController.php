<?php

namespace App\Http\Controllers;

class LifePersonsInteractionsController extends Controller
{
	public function __construct()
	{
		$this->model = new \App\Models\LifePersonsInteractions;

		$this->middleware('auth:api', [
			'except' => ['search', 'find'],
		]);

		$this->defaultRoutes();
	}

	public function search()
    {
        return $this->model->search()
			->with(['personFrom', 'personTo'])
			->paginate(request('per_page', 15));
    }
}
