<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$routes = include __DIR__ . '/api_generated.php';
foreach($routes as $route_name => $route) {
    Route::match($route['method'], $route['route'], $route['call'])->name($route_name);
}

Route::get('life-events/test/{id}', '\App\Http\Controllers\LifeEventsController@test');
Route::get('life-persons/cycle', '\App\Http\Controllers\LifePersonsController@cycle');