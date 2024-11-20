<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.index');
    }

    public function show(string $id)
    {
        return view('suppliers.index');
    }

    public function edit(string $id)
    {
        return view('suppliers.index');
    }

    public function destroy(string $id)
    {
        return view('suppliers.index');
    }
}
