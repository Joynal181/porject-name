<?php

use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/{id}', [profileController::class,"index"]);