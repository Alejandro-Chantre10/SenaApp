<?php

use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('layouts.layout');
});

Route::get('/', function () {
    return view('index');
});

Route::resource('personal_data', PersonalDataController::class);
Route::resource('users', UserController::class);



