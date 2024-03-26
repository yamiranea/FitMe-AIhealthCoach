<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserSportController;
use App\Http\Controllers\UserNutritionController;
use App\Http\Controllers\SportPlanController;



Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/genders', [GenderController::class, 'index']);

Route::get('/user_nutritions', [UserNutritionController::class, 'index']);
Route::post('/user_nutritions', [UserNutritionController::class, 'store']);
Route::get('/user_nutritions/{id}', [UserNutritionController::class, 'show']);
Route::put('/user_nutritions/{id}', [UserNutritionController::class, 'update']);
Route::delete('/user_nutritions/{id}', [UserNutritionController::class, 'destroy']);

Route::get('/user_sports', [UserSportController::class, 'index']);
Route::post('/user_sports', [UserSportController::class, 'store']);
Route::get('/user_sports/{id}', [UserSportController::class, 'show']);
Route::put('/user_sports/{id}', [UserSportController::class, 'update']);
Route::delete('/user_sports/{id}', [UserSportController::class, 'destroy']);

Route::post('/sport_plan', [SportPlanController::class, 'createSportPlan']);
Route::put('/users/{id}/sport_plan', [SportPlanController::class, 'updateSportPlan']);
Route::delete('/users/{id}/sport_plan', [SportPlanController::class, 'deleteSportPlan']);