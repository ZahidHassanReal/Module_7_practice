<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstadController;
use App\Http\Controllers\WeatherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/about',[AboutController::class,'index']);

// Route::get("/hello",[OstadController::class,'hello']);

//Route::get("/greet/{name?}",[OstadController::class,index'greet']);




Route::get("/loginOstad",[OstadController::class,'login']);
// Route::get("/weather/{location}",[WeatherController::class,'location']);

