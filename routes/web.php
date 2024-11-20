<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TagController;

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

Route::middleware("auth")->group(function(){
    //Auth
    Route::get('/home', [AuthController::class, 'home'])-> name('home');
    Route::get('/to-logout', [AuthController::class, 'to_logout'])-> name('to_logout');

    //Clients
    Route::get('/clients/edit', [ClientController::class, 'edit'])-> name('client_edit');

    //Clients pero temporalmente:: Pasarlo al controlador Compras
    Route::get('/clients/my-purchases', [ClientController::class, 'my_purchases'])-> name('client_purchases');
    Route::get('/clients/my-bills', [ClientController::class, 'my_bills'])-> name('client_bills');

    //Categories
    Route::get('/categories', [CategoryController::class, 'index'])-> name('category_index');
    Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('category_show');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])-> name('category_edit');
    Route::delete('/categories/destroy/{id}', [CategoryController::class, 'destroy'])-> name('category_destroy');
    
    //Suppliers
    Route::get('/suppliers', [SupplierController::class, 'index'])-> name('supplier_index');
    Route::get('/supplier/show/{id}', [SupplierController::class, 'show'])->name('supplier_show');
    Route::get('/suppliers/edit/{id}', [SupplierController::class, 'edit'])-> name('supplier_edit');
    Route::delete('/suppliers/destroy/{id}', [SupplierController::class, 'destroy'])-> name('supplier_destroy');

    //Suppliers
    Route::get('/tags', [TagController::class, 'index'])-> name('tag_index');
    Route::get('/tags/show/{id}', [TagController::class, 'show'])->name('tag_show');
    Route::get('/tags/edit/{id}', [TagController::class, 'edit'])-> name('tag_edit');
    Route::delete('/tags/destroy/{id}', [TagController::class, 'destroy'])-> name('tag_destroy');
});

/*
//Ruta para clients
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index'); // Mostrar todos los clientes
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create'); // Mostrar el formulario para crear un nuevo cliente
//Route::post('/clients', [ClientController::class, 'store'])->name('clients.store'); // Guardar un nuevo cliente (enviar formulario de creación)
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show'); // Mostrar los detalles de un cliente específico
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit'); // Mostrar el formulario para editar un cliente específico
//Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update'); // Actualizar un cliente existente
//Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy'); // Eliminar un cliente
*/