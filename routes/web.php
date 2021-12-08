<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/layout',function(){
//     return view('layouts.layout');
// })


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/diagnosis', function () {
    return view('admin_screens.diagnosis');
});

Route::get('/official', function () {
    return view('admin_screens.official');
});

Route::get('/remove', function () {
    return view('admin_screens.remove');
});