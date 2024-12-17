<?php

use App\Http\Controllers\Api\API_AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Rutas para la API
Route::post('/clients/register',[API_AccountController::class, 'store']);
Route::post('/accounts/validate',[API_AccountController::class, 'validate_credentials']);
Route::get('/accounts/{id}',[API_AccountController::class, 'get_data_account']);