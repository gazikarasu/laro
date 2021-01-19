<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DenemeController;
use\App \Http\Controllers\ListController;
use\App\Http\Controllers\RegController;

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

Route::get('/giris',[RegController::class,'giris']);
Route::post('/kaydet',[RegController::class, 'getir']);
Route::get('/list',[ListController::class, 'listele']);
