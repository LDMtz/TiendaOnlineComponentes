<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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