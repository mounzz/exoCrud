<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExoCrudController;

Route::post('/create',[ExoCrudController::class,'store']);
Route::get('/',[ExoCrudController::class,'welcome']);
