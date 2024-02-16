<?php

use Illuminate\Support\Facades\Route;

// import MainController
use App\Http\Controllers\MainController;

// route.index
Route::get('/', [MainController::class, 'index'])->name('route.index');


// route.create
Route::get('/create', [MainController::class, 'create'])->name('route.create');

// route.store
Route::post('/', [MainController::class, 'store'])->name('route.store');

// route.delete
Route::delete('/', [MainController::class, 'destroy'])->name('route.delete');

// route.show
Route::get('/show{id}', [MainController::class, 'show'])->name('route.show');