<?php

use Illuminate\Support\Facades\Route;

// import MainController
use App\Http\Controllers\MainController;

// route.index
Route::get('/', [MainController::class, 'index'])->name('route.index');

// route.show
Route::get('/show{id}', [MainController::class, 'show'])->name('route.show');

