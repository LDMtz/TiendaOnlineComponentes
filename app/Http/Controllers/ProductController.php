<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['pictures' => function($query) {
            $query->limit(1); // Solo carga la primera imagen asociada
        }])->get();

        foreach ($products as $product) {
            // Verifica si la colección de imágenes está vacía
            if ($product->pictures->isEmpty()) {
                // Si no hay imágenes, asigna null
                $product->first_picture_base64 = null;
            } else {
                // Si hay imágenes, convierte la primera imagen a base64
                $firstPicture = $product->pictures->first();
                $product->first_picture_base64 = base64_encode($firstPicture->picture);
            }
            
        }

        return view("products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); // Obtén todas las categorías
        $suppliers = Supplier::all(); // Obtén todos los proveedores
        return view('products.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validando los campos
        $validated = $request->validate([
            // Validación de campos de texto
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'category' => 'required|exists:categories,id', // Asegura que la categoría exista en la base de datos
            'supplier' => 'required|exists:suppliers,id', // Asegura que el proveedor exista en la base de datos
            'images.*' => 'image|mimes:jpeg,png,jpg|max:4096', // Cada imagen debe ser una imagen válida y no mayor a 4MB
        ]);

        $specificData = [];
        if ($request->has('dataProduct') && is_array($request->dataProduct)) {
            foreach ($request->dataProduct as $item) {
                // Separar el string 'title:content' en dos partes usando el delimitador ':'
                list($title, $content) = explode(':', $item);
    
                // Asignar al array asociativo con el título como clave y el contenido como valor
                $specificData[$title] = $content;
            }
        } else {
            $specificData = null; // Si no hay datos en dataProduct, asignar null
        }

        //Generando el JSON para el registro
        $data = [
            'data' => [
                'general-data' => [
                    'name' => $validated['name'],
                    'brand' => $validated['brand'],
                    'model' => $validated['model'],
                ],
                'specific-data' => $specificData ?? null, // Si no hay "specificData", lo dejamos como null
            ]
        ];
        

        //Insertando el registro
        $product = Product::create([
            'data' => $data,
            'state' => true,
            'category_id' => $validated['category'],
            'supplier_id' => $validated['supplier'],
        ]);

        // Procesando las imágenes y guardándolas en la base de datos
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Obtener el contenido binario de la imagen
                $imageBinary = file_get_contents($image->getRealPath());

                // Guardar la imagen en la base de datos como BLOB
                ProductPicture::create([
                    'product_id' => $product->id,
                    'picture' => $imageBinary, // Almacenar el contenido binario de la imagen
                ]);
            }
        }

        // Redirigir con un mensaje de éxito
        return redirect()->route('product_index')->with('success', 'Producto creado correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = $product->with(['category', 'supplier', 'pictures'])->find($product->id);

        // Convertir las imágenes a base64
        foreach ($product->pictures as $picture) {
            // Convertir el campo binario 'picture' a base64
            $picture->base64_image = base64_encode($picture->picture);
        }

        return view("products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load('pictures');
        $categories = Category::all();
        $suppliers = Supplier::all();

        // Convertir las imágenes a base64
        foreach ($product->pictures as $picture) {
            // Convertir el campo binario 'image_blob' a base64
            $picture->base64_image = base64_encode($picture->picture);
        }
        
        return view('products.edit', compact('product','categories', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //Validando los campos
        $validated = $request->validate([
            // Validación de campos de texto
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'state' => 'required|boolean',
            'category' => 'required|exists:categories,id', 
            'supplier' => 'required|exists:suppliers,id',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $specificData = [];
        if ($request->has('dataProduct') && is_array($request->dataProduct)) {
            foreach ($request->dataProduct as $item) {
                list($title, $content) = explode(':', $item);
                $specificData[$title] = $content;
            }
        } else {
            $specificData = null; // Si no hay datos en dataProduct, asignar null
        }

        //Generando el JSON para el registro
        $data = [
            'data' => [
                'general-data' => [
                    'name' => $validated['name'],
                    'brand' => $validated['brand'],
                    'model' => $validated['model'],
                ],
                'specific-data' => $specificData ?? null, // Si no hay "specificData", lo dejamos como null
            ]
        ];


        //Actualizando el registro
        $product->update([
            'data' => $data,
            'state' => $validated['state'],
            'category_id' => $validated['category'],
            'supplier_id' => $validated['supplier'],
        ]);

        // Si no existe, será un array vacío
        $currentImages = $request->input('current_images', []);
        // Eliminar las imágenes asociadas al producto que no están en current_images
        ProductPicture::where('product_id', $product->id)
        ->whereNotIn('id', $currentImages)
        ->delete();

        // Procesando las imágenes y guardándolas en la base de datos
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Obtener el contenido binario de la imagen
                $imageBinary = file_get_contents($image->getRealPath());

                // Guardar la imagen en la base de datos como BLOB
                ProductPicture::create([
                    'product_id' => $product->id,
                    'picture' => $imageBinary, // Almacenar el contenido binario de la imagen
                ]);
            }
        }
        
        return redirect()->route('product_index')->with('success', 'Producto actualizado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product_index')->with('success', 'Producto eliminado exitosamente.');
    }
}
