<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
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

    public function show_product(Product $product){
        // Cargar las relaciones necesarias
        $product = $product->load([
            'category',     // Relación con la categoría
            'tags',         // Relación con las etiquetas
            'pictures',     // Relación con las imágenes
            'inventory'     // Relación con el inventario
        ]);

        $images = [];

        // Recorremos las imágenes del producto y las convertimos a Base64
        foreach ($product->pictures as $picture) {
            $imageData = $picture->picture;  // El BLOB está en el campo 'picture'

            if ($imageData) {
                // Convertimos el BLOB a Base64 y lo agregamos al array
                $images[] = 'data:image/jpeg;base64,' . base64_encode($imageData); // Ajusta el tipo MIME si es necesario
            } else {
                $images[] = null;  // Si no hay imagen, agregamos null al array
            }
        }

        $tags = [];

        // Recorremos los tags del producto
        foreach ($product->tags as $tag) {
            $tags[] = [
                'name' => $tag->name,
                'path' => $tag->path
            ];
        }

        $data = $product->data;
        $generalData = $data['data']['general-data'];

        $specificData = $data['data']['specific-data'] ?? null;
        $name = $generalData['name'] . ' ' . $generalData['brand'] . ' ' . $generalData['model'];
        $category = $product->category->name;
        $price = $product->inventory ? $product->inventory->sale_price : null;
        $stock = $product->inventory ? $product->inventory->stock : null;

        $data_product = [
            'name'          => $name,
            'category'      => $category,
            'specific_data' => $specificData,
            'price'         => $price,
            'stock'         => $stock,
            'images'        => $images,
            'tags'          => $tags
        ];

        return view('clients.tmp_product_show',compact('data_product'));
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
