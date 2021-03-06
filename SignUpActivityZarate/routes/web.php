<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[SignUpController::class,'index']);
Route::get('/app',[SignUpController::class,'app']);
Route::post('/app',[SignUpController::class,'displayData']);
