<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSportController;
use App\Http\Controllers\UserNutritionController;

Route::apiResource('users', UserController::class);
Route::apiResource('user_sports', UserSportController::class);
Route::apiResource('user_nutritions', UserNutritionController::class);