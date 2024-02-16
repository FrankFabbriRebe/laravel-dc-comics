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

// route.show
Route::get('/show{id}', [MainController::class, 'show'])->name('route.show');

// route.delete
Route::delete('/{id}', [MainController::class, 'destroy'])->name('route.delete');

// route.edit
Route::get('/{id}/edit', [MainController::class, 'edit'])->name('route.edit');