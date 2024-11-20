<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.index');
    }

    public function show($id)
    {
        return view('suppliers.index');
    }

    public function edit($id)
    {
        return view('suppliers.index');
    }

    public function destroy($id)
    {
        return view('suppliers.index');
    }
}
