<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view("suppliers.index", compact('suppliers'));
    }

    public function create(){
        return view('suppliers.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:10',
        ]);

        Supplier::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'number' => $validated['number'],
            'state' => true,
        ]);

        return redirect()->route('supplier_index')->with('success', 'Proveedor creado exitosamente!');
    }

    public function show(Supplier $supplier)
    {
        return view("suppliers.show", compact("supplier"));
    }

    public function edit(Supplier $supplier)
    {
        return view("suppliers.edit", compact("supplier"));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:10',
            'state' => 'required|boolean',
        ]);

        $supplier->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'number' => $validated['number'],
            'state' => $validated['state'],
        ]);

        return redirect()->route('supplier_index')->with('success', 'Proveedor actualizado correctamente.');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier_index')->with('success', 'Proveedor eliminado exitosamente.');
    }
}
