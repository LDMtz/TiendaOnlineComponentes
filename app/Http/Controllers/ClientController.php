<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('clients.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit() //FALTA PASARLE EL ID
    {
        return view('clients.edit');
    }


    /* TEMPORTALES -> MOVEL AL CONTROLADOR COMPRAS */
    public function my_purchases() //FALTA PASARLE EL ID
    {
        return view('clients.tmp_purchases');
    }

    public function my_bills() //FALTA PASARLE EL ID
    {
        return view('clients.tmp_bills');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $item = new Client();
        $item->fill([
            'name' => $request->name,
            'last_names' => $request->last_names,
            'number' => $request->number,
            'email' => $request->email,
            'state' => true,  // Asignamos `true` al campo `state`
        ]);
        $item->save();
        return to_route('login');*/
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
