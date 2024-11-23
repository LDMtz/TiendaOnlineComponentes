<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("categories.index", compact('categories'));
    }

    public function create(){
        // Obtener todas las categorías -> Para el select
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'parent_category_id' => 'nullable|exists:categories,id', // El ID de la categoría padre es opcional, pero si se proporciona, debe existir en la tabla 'categories'
        ]);

        // Crear la nueva categoría con los datos validados
        Category::create([
            'name' => $validated['name'],
            'parent_category_id' => $validated['parent_category_id'] ?? null,
            'state' =>  true,
        ]);

         // Redirigir a la lista de categorías con un mensaje de éxito
        return redirect()->route('category_index')->with('success', 'Categoría creada exitosamente!');
    }

    public function show(Category $category){
        return view("categories.show", compact("category"));
    }

    public function edit(Category $category){
        // Obtener todas las categorías disponibles para el select (sin incluir la categoría actual)
        $categories = Category::where('id', '!=', $category->id)->get(); // No incluir la categoría actual
        return view("categories.edit", compact("category", "categories"));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string', 
            'parent_category_id' => 'nullable|exists:categories,id', 
            'state' => 'required|boolean',
        ]);

        $category->update([
            'name' => $validated['name'], // Actualizar el nombre
            'parent_category_id' => $validated['parent_category_id'] ?? null, // Si no se proporciona un valor para la categoría padre, se establece en null
            'state' => $validated['state'], // Actualizar el estado
        ]);

        return redirect()->route('category_index')->with('success', 'Categoría actualizada correctamente.');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category_index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
