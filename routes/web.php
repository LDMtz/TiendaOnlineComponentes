<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductController;

//Para usuarios no autenticados
Route::middleware("guest")->group(function(){
    //Auth
    Route::get('/', [AuthController::class, 'index'])-> name('default_home'); //<-- Solo el home de invitados
    Route::get('/login', [AuthController::class, 'login_form'])-> name('login');
    Route::post('/to-login', [AuthController::class, 'to_login'])-> name('to_login');

    //Clients
    Route::get('/clients/register', [ClientController::class, 'create'])-> name('register');

    //Account
    Route::post('/store', [AccountController::class, 'store'])->name('store');
});

//Para usuarios autenticados
Route::middleware("auth")->group(function(){
    //Auth
    Route::get('/home', [AuthController::class, 'home'])-> name('home');
    Route::get('/to-logout', [AuthController::class, 'to_logout'])-> name('to_logout');

    //Clients
    Route::get('/clients/edit', [ClientController::class, 'edit'])-> name('client_edit');

    //Clients pero temporalmente:: Pasarlo al controlador Compras
    Route::get('/clients/my-purchases', [ClientController::class, 'my_purchases'])-> name('client_purchases');
    Route::get('/clients/my-bills', [ClientController::class, 'my_bills'])-> name('client_bills');

    Route::get('/clients/show-product/{product}', [ClientController::class, 'show_product'])-> name('client_show_product');

    //Categories
    Route::get('/categories', [CategoryController::class, 'index'])-> name('category_index');
    Route::get('/categories/create', [CategoryController::class, 'create'])-> name('category_create');
    Route::post('/categories/store', [CategoryController::class, 'store'])-> name('category_store');
    Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('category_show');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])-> name('category_edit');
    Route::patch('/categories/update/{category}', [CategoryController::class, 'update'])-> name('category_update');
    Route::delete('/categories/destroy/{category}', [CategoryController::class, 'destroy'])-> name('category_destroy');
    
    //Suppliers
    Route::get('/suppliers', [SupplierController::class, 'index'])-> name('supplier_index');
    Route::get('/suppliers/create', [SupplierController::class, 'create'])-> name('supplier_create');
    Route::post('/suppliers/store', [SupplierController::class, 'store'])-> name('supplier_store');
    Route::get('/supplier/show/{supplier}', [SupplierController::class, 'show'])->name('supplier_show');
    Route::get('/suppliers/edit/{supplier}', [SupplierController::class, 'edit'])-> name('supplier_edit');
    Route::patch('/suppliers/update/{supplier}', [SupplierController::class, 'update'])-> name('supplier_update');
    Route::delete('/suppliers/destroy/{supplier}', [SupplierController::class, 'destroy'])-> name('supplier_destroy');

    //Tags
    Route::get('/tags', [TagController::class, 'index'])-> name('tag_index');
    Route::get('/tags/create', [TagController::class, 'create'])-> name('tag_create');
    Route::post('/tags/store', [TagController::class, 'store'])-> name('tag_store');
    Route::get('/tags/show/{id}', [TagController::class, 'show'])->name('tag_show');
    Route::get('/tags/edit/{id}', [TagController::class, 'edit'])-> name('tag_edit');
    Route::patch('/tags/update/{id}', [TagController::class, 'update'])-> name('tag_update');
    Route::delete('/tags/destroy/{id}', [TagController::class, 'destroy'])-> name('tag_destroy');

    //Products
    Route::get('/products', [ProductController::class, 'index'])-> name('product_index');
    Route::get('/products/create', [ProductController::class, 'create'])-> name('product_create');
    Route::post('/products/store', [ProductController::class, 'store'])-> name('product_store');
    Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('product_show');
    Route::get('/products/edit/{product}', [ProductController::class, 'edit'])-> name('product_edit');
    Route::patch('/products/update/{product}', [ProductController::class, 'update'])-> name('product_update');
    Route::delete('/products/destroy/{product}', [ProductController::class, 'destroy'])-> name('product_destroy');
});
