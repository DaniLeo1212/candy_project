<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandyController;
use App\Http\Controllers\FlavorController;

Route::resource('candies', CandyController::class);
Route::resource('flavors', FlavorController::class);

