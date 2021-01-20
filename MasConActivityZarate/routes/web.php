<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroController;

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




Route::get('/',[IntroController::class,'index']);
Route::get('/generic',[IntroController::class,'generic']);
Route::get('/element',[IntroController::class,'element']);

