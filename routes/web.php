<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Common Routes
|--------------------------------------------------------------------------
*/

// Landing Page
Route::view('/', 'pages.common.welcome');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Dashboard
Route::resource('/dashboard', 'Services\ServiceController');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

// Services
Route::resource('/services', 'Services\ServiceController');

// Sell Car
Route::resource('/sellcars','SellCars\SellCarController');

// Buy Car
Route::resource('/services', 'Services\ServiceController');

// Faqs
Route::resource('/services', 'Services\ServiceController');

// Contacts Car
Route::resource('/services', 'Services\ServiceController');
