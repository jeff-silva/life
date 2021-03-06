<?php

namespace App\Http\Controllers;

class EmailsTemplatesController extends Controller
{
	public function __construct()
	{
		$this->model = new \App\Models\EmailsTemplates;

		$this->middleware('auth:api', [
			'except' => ['search', 'find'],
		]);

		// Generate default routes (search, find, save, delete, etc...)
		$this->defaultRoutes();

		// Custom route example: POST /api/emails-templates/test/123
		// $this->route('post', '/test/{id}', '@test');
	}
}
