<?php

namespace App\Http\Controllers;

class UsersGroupsController extends Controller
{
	public function __construct()
	{
		$this->model = new \App\Models\UsersGroups;

		$this->middleware('auth:api', [
			'except' => ['search', 'find'],
		]);
	}
}
