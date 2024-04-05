<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index']);

Route::get('/about/{name}', [IndexController::class, 'about']);



