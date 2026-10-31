
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Landing Page
Route::get('/', [PageController::class, 'index']);

// About Page
Route::get('/about', [PageController::class, 'about']);

// Customer Accounts Page
Route::get('/customers', [CustomerController::class, 'index']);

// User Accounts Page
Route::get('/users', [UserController::class, 'index']);
