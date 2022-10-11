<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\FlightController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//GET
Route::get("api/airlines", [AirlineController::class, "index"]);
//GET
Route::get("api/airlines/{id}", [AirlineController::class, "show"]);
//POST
Route::post("api/airlines", [AirlineController::class, "store"]);
//PUT
Route::put("api/airlines/{id}", [AirlineController::class, "update"]);
//DELETE
Route::delete("api/airlines/{id}", [AirlineController::class, "destroy"]);
//VIEWS
Route::get("airline/new", [AirlineController::class, "newView"]);
Route::get("airline/edit/{id}", [AirlineController::class, "editView"]);
Route::get("airline/update/{id}", [AirlineController::class, "updateView"]);
Route::get("airline/list", [AirlineController::class, "listView"]);


Route::get("api/flights", [FlightController::class, "index"]);
//GET
Route::get("api/flights/{id}", [FlightController::class, "show"]);
//POST
Route::post("api/flights", [FlightController::class, "store"]);
//PUT
Route::put("api/flights/{id}", [FlightController::class, "update"]);
//DELETE
Route::delete("api/flights/{id}", [FlightController::class, "destroy"]);
//VIEWS
Route::get("flight/new", [FlightController::class, "newView"]);
Route::get("flight/edit/{id}", [FlightController::class, "editView"]);
Route::get("flight/list", [FlightController::class, "listView"]);