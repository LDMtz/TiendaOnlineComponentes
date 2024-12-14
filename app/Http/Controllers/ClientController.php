<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function edit()
    {
        $user = Auth::user();
        $client = $user->client;
        $account = $client->account;

        $accountData = [
            'id' => $account->id,
            'username' => $account->username,
            'email' => $account->email,
            'picture_profile' => $account->picture_profile ? base64_encode($account->picture_profile) : null,
            'created_at' => $account->created_at,
        ];

        return view('clients.edit', compact('client', 'accountData'));
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
