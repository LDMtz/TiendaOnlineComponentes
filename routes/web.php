<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccountController;
//Puedes acceder sin estar logueado
/*
Route::middleware([GuestMiddleware::class])->group(function(){

});*/
Route::middleware("guest")->group(function(){

});

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
    
});


/*
//Necesitar validarte para acceder a estas rutas
Route::middleware([AuthAccountMiddleware::class])->group(function(){

});

*/

/*
Route::get('/', function () {
    return view('clients.home');
});



//Ruta para clients
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index'); // Mostrar todos los clientes
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create'); // Mostrar el formulario para crear un nuevo cliente
//Route::post('/clients', [ClientController::class, 'store'])->name('clients.store'); // Guardar un nuevo cliente (enviar formulario de creación)
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show'); // Mostrar los detalles de un cliente específico
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit'); // Mostrar el formulario para editar un cliente específico
//Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update'); // Actualizar un cliente existente
//Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy'); // Eliminar un cliente
*/