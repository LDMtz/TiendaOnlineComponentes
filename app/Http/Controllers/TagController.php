<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Para cargar los datos de la modal
        $select_products = Product::select('id',DB::raw("JSON_UNQUOTE(JSON_EXTRACT(data, '$.data.general-data.name')) as name"))
            ->get()
            ->map(function ($select_products) {
            return [
                'id' => $select_products->id,
                'name' => $select_products->name,
            ];
        });

        //Para la tabla del index
        $products_with_tags = Product::whereHas('tags') 
        ->select(
            'id', 
            DB::raw("JSON_UNQUOTE(JSON_EXTRACT(data, '$.data.general-data.name')) as name"),
            DB::raw("JSON_UNQUOTE(JSON_EXTRACT(data, '$.data.general-data.brand')) as brand"),
            DB::raw("JSON_UNQUOTE(JSON_EXTRACT(data, '$.data.general-data.model')) as model")
        )
        ->with('tags')
        ->get()
        ->map(function ($products_with_tags) {
            return [
                'id' => $products_with_tags->id,
                'name' => $products_with_tags->name,
                'brand' => $products_with_tags->brand,
                'model' => $products_with_tags->model,
                'tags' => $products_with_tags->tags->pluck('path'),
            ];
        });

        return view("tags.index", compact('select_products', 'products_with_tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $productId = $request->input('product-selected');
        $productTemp = Product::with('tags')->find($productId);

        $data = $productTemp->data;
        $generalData = $data['data']['general-data'] ?? null;

        // Obtener todas las etiquetas
        $allTags = Tag::all();

        // Filtrar las etiquetas que ya están asociadas al producto
        $associatedTags = $productTemp->tags->pluck('id')->toArray();
        $availableTags = $allTags->whereNotIn('id', $associatedTags);

        // Preparar los datos necesarios
        $product = [
            'id' => $productTemp->id,
            'general_data' => $generalData,
            'tags' => $productTemp->tags,
            'availableTags' => $availableTags // Etiquetas disponibles
        ];

        return view("tags.create",compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id', // Asegurarnos de que el producto existe
            'tag' => 'required|exists:tags,id', // Asegurarnos de que la etiqueta existe
        ]);

        // Obtener el producto y la etiqueta seleccionada
        $product = Product::find($validated['product_id']);
        $tagId = $validated['tag'];

         // Asociar la etiqueta al producto
        $product->tags()->attach($tagId);

        return redirect()->route("tag_index")->with('success', 'Etiqueta agregada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtener el producto
        $productTemp = Product::with('tags')->find($id);

        $data = $productTemp->data;
        $generalData = $data['data']['general-data'] ?? null;

        // Obtener la primera imagen (si existe)
        $image = $productTemp->pictures()->first();

        // Convertir la imagen a base64 si existe
        $base64Image = null;
        if ($image) {
            $base64Image = base64_encode($image->picture);
        }

        // Preparar los datos necesarios
        $product = [
            'id' => $productTemp->id,
            'general_data' => $generalData,
            'tags' => $productTemp->tags,
            'image' => $base64Image
        ];

        return view("tags.show",compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productTemp = Product::with('tags')->find($id);

        $data = $productTemp->data;
        $generalData = $data['data']['general-data'] ?? null;

        // Filtrar las etiquetas que ya están asociadas al producto
        $associatedTags = $productTemp->tags->pluck('id')->toArray();

        // Obtener todas las etiquetas
        $all_tags = Tag::all();

        // Preparar los datos necesarios
        $product = [
            'id' => $productTemp->id,
            'general_data' => $generalData,
            'tags' => $productTemp->tags,
            'associatedTags' => $associatedTags // Asociadas
        ];

        return view("tags.edit",compact("product","all_tags"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Obtener el producto
        $product = Product::findOrFail($id);

        // Obtener las etiquetas seleccionadas
        $selectedTags = $request->input('selected_tags', []); // Default a array vacío si no hay etiquetas

        // Usamos sync para asociar las etiquetas
        $product->tags()->sync($selectedTags);

        return redirect()->route('tag_index')->with('success', 'Etiquetas actualizadas correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar el producto por su ID
        $product = Product::findOrFail($id);

        // Eliminar todas las etiquetas asociadas al producto
        $product->tags()->detach();

        return redirect()->route('tag_index')->with('success', 'Todas las etiquetas han sido eliminadas correctamente.');
    }
}
