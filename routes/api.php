<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\userExmplController;

Route::get('/users', [userExmplController::class, 'index']);

Route::get('/users/{id}', [userExmplController::class, 'show']);

Route::post('/user', [userExmplController::class, 'store']);

Route::put('/user/{id}', [userExmplController::class, 'update']);

Route::patch('/user/{id}', [userExmplController::class, 'updatePartial']);

Route::delete('/user/{id}', [userExmplController::class, 'destroy']);
