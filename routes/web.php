<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class,'home']);
Route::get('/settings', [MainController::class,'settings']);
Route::post('/settings', [MainController::class,'settings_process']);
