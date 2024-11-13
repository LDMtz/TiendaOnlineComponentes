<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        //dd($request->all());
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'role_id' => 'exists:roles,id', // Verifica que el rol exista en la tabla roles
            'username' => 'required|string|max:50|unique:accounts,username', // Limita la longitud y asegura unicidad
            'email' => 'required|email|max:200|unique:accounts,email', // Limita la longitud y asegura unicidad
            'password' => 'required|string|min:8|confirmed', // Mínimo de 8 caracteres y debe ser confirmado
            'picture_profile' => 'nullable|image|max:2048', // Archivo de imagen opcional con un tamaño máximo de 2MB
            'names' => 'required|string|max:100', // Limita la longitud
            'last_names' => 'required|string|max:100', // Limita la longitud
            'number' => 'required|string|size:10', // Número obligatorio con una longitud exacta de 10
        ]);

        // Procesar la imagen si se sube
        if ($request->hasFile('picture_profile')) {
            $image = $request->file('picture_profile');
            $binary_image = file_get_contents($image->getRealPath());
        } else {
            $binary_image = null;
        }

        // Crear la cuenta
        $newAccount = Account::create([
            'role_id' => 4,
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'picture_profile' => $binary_image,
            'state' => true
        ]);

        // Crear el cliente asociado
        $newClient = Client::create([
            'names' => $validatedData['names'],
            'last_names' => $validatedData['last_names'],
            'number' => $validatedData['number'],
            'state' => true,
            'account_id' => $newAccount->id,
        ]);

        //Cambiar esto a redireccionamiento con un mensaje para despues
        return to_route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
