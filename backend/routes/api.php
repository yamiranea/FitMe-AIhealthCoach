<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSportController;
use App\Http\Controllers\UserNutritionController;

Route::apiResource('users', UserController::class);
Route::apiResource('user_sports', UserSportController::class);

Route::get('/user_nutritions', [UserNutritionController::class, 'index']);
Route::post('/user_nutritions', [UserNutritionController::class, 'store']);
Route::get('/user_nutritions/{id}', [UserNutritionController::class, 'show']);
Route::put('/user_nutritions/{id}', [UserNutritionController::class, 'update']);
Route::delete('/user_nutritions/{id}', [UserNutritionController::class, 'destroy']);