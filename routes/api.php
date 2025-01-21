<?php

use App\Http\Controllers\Api\API_AccountController;
use App\Http\Controllers\Api\API_ProductController;
use App\Http\Controllers\Api\API_SaleController;
use Illuminate\Support\Facades\Route;

/*   -->    RUTAS PARA LA API    <--  */

//Rutas para Account
Route::post('/clients/register',[API_AccountController::class, 'store_client']);
Route::post('/accounts/validate',[API_AccountController::class, 'validate_credentials']);
Route::get('/accounts/{id}',[API_AccountController::class, 'get_data_account']);

//Rutas para Product
Route::get('/products/many/{limit}',[API_ProductController::class, 'get_products_with_limit']);
Route::get('/products/cart/{account_id}',[API_ProductController::class, 'get_client_cart']);
Route::post('/products/cart/add/', [API_ProductController::class, 'add_product_to_cart']);
Route::delete('/products/cart/delete/{account_id}/{product_id}', [API_ProductController::class, 'delete_product_from_cart']);
Route::patch('/products/cart/increase/', [API_ProductController::class, 'increase_quantity_product_cart']);
Route::patch('/products/cart/decrease/', [API_ProductController::class, 'decrease_quantity_product_cart']);
Route::delete('/products/cart/remove-all/{account_id}', [API_ProductController::class, 'remove_all_products_from_cart']);

//Rutas para Sale
Route::post('/sales/store/{account_id}', [API_SaleController::class, 'store_sale']);
Route::get('/sales/client/{account_id}',[API_SaleController::class, 'get_client_sales']);
Route::get('/sales/{sale_id}',[API_SaleController::class, 'get_sale']);