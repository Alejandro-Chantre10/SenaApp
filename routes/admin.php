<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('/admin', HomeController::class);