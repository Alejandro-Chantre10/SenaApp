<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('/admin', HomeController::class);


// Route::get('/admin', function () {
//     return view('layouts.layout');
// });
