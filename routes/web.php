<?php

use Illuminate\Support\Facades\Route;

// import MainController
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
