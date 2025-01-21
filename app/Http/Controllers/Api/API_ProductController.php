<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Account;
use App\Models\Inventory;
use Illuminate\Http\Request;

class API_ProductController extends Controller
{
    public function get_products_with_limit(int $limit){
        try {
            $products = Product::with([
                'inventory',  // Relación con Inventory para obtener el precio y stock
                'pictures',   // Relación con ProductPicture para obtener la imagen
                'tags'        // Relación con Tag para obtener las etiquetas
            ])
            ->limit($limit) // Limita a los productos que desees
            ->get()
            ->map(function ($product) {
                // Obtenemos los datos del producto
                $data = $product->data;
                $generalData = $data['data']['general-data'];
    
                // Juntamos los campos de 'name', 'brand', 'model' del 'data'
                $name = $generalData['name'] . ' ' . 
                        $generalData['brand'] . ' ' . 
                        $generalData['model'];
    
                // Verificamos si existen características específicas y las agregamos
                $specificData = $data['data']['specific-data'] ?? [];
    
                $specificDataString = '';
                foreach ($specificData as $key => $value) {
                    // Concatenamos las características con " / "
                    $specificDataString .= $key . ' ' . $value . ' / ';
                }
    
                // Eliminar el último " / " (si existe)
                $specificDataString = rtrim($specificDataString, ' / ');
    
                // Finalmente, agregamos las características al nombre
                $name .= ' / ' . $specificDataString;
    
                // Determinamos el estado (state) dependiendo del stock
                //$state = $product->inventory ? ($product->inventory->stock > 0 ? true : false) : false;

                // Obtenermos el stock
                $stock = $product->inventory ? ($product->inventory->stock > 0 ? $product->inventory->stock : 0) : 0;

                // Obtenemos las rutas de las etiquetas asociadas al producto
                $tagNames = $product->tags->pluck('name')->toArray();
    
                // Obtenemos la primera imagen asociada al producto y la convertimos a base64
                $imageBase64 = $product->pictures->first() 
                    ? base64_encode($product->pictures->first()->picture) 
                    : null;
    
                // Formateamos el precio
                $price = $product->inventory && $product->inventory->sale_price 
                    ? (float) $product->inventory->sale_price
                    : null;
    
                // Creamos el array con los datos formateados
                return [
                    'id'         => $product->id,
                    'name'       => $name,  // El nombre combinado
                    'stock'      => $stock, // Estado basado en el stock
                    //'state'      => $state, // Estado basado en el stock
                    'price'      => $price,  // Precio de venta desde Inventory
                    'tag_names' => $tagNames,  // Rutas de las etiquetas asociadas
                    'image'      => $imageBase64, // Imagen en base64
                ];
            });
    
            // Retornar los productos como JSON con código 200 (éxito)
            return response()->json($products,200);
    
        } catch (\Exception $e) {
            // En caso de error, devolver un mensaje con código 500
            return response()->json([
                'message' => 'Ocurrió un error.',
                'error'   => $e->getMessage(),
            ], 500);
        }

    }

    public function get_client_cart(int $account_id){
        //Validaciones
        if (!Account::find($account_id))
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        $cart = Cart::where('account_id', $account_id)->first();
        if (!$cart) 
            return response()->json([],204);

        try{
            // Obtener los productos asociados al carrito con la imagen
            $products = $cart->products()->with('pictures')->get();

            //Guardamos los datos
            $cart_products = $products->map(function ($product) {
                // Obtenemos los datos del producto
                $data = $product->data;
                $generalData = $data['data']['general-data'];

                // Juntamos los campos de 'name', 'brand', 'model' del 'data'
                $name = $generalData['name'] . ' ' . 
                        $generalData['brand'] . ' ' . 
                        $generalData['model'];

                // Verificamos si existen características específicas y las agregamos
                $specificData = $data['data']['specific-data'] ?? [];

                $specificDataString = '';
                foreach ($specificData as $key => $value) {
                    // Concatenamos las características con " / "
                    $specificDataString .= $key . ' ' . $value . ' / ';
                }

                // Eliminar el último " / " (si existe)
                $specificDataString = rtrim($specificDataString, ' / ');

                // Finalmente, agregamos las características al nombre
                $name .= ' / ' . $specificDataString;

                //Stock
                $stock = $product->inventory ? ($product->inventory->stock > 0 ? $product->inventory->stock : 0) : 0;

                // Formateamos el precio
                $price = $product->inventory && $product->inventory->sale_price 
                    ? (float) $product->inventory->sale_price
                    : null;

                //Quantity
                $quantity = $product->pivot->quantity;

                //Imagen
                $imageBase64 = $product->pictures->first() 
                    ? base64_encode($product->pictures->first()->picture) 
                    : null;
                
                return [
                    'product' => [
                        'id' => $product->id,
                        'name'=> $name,
                        'stock' => $stock,
                        'price' => $price,
                        'tag_names' => [],
                        'image' => $imageBase64 ,
                    ],
                    'cart' => [
                        'quantity' => $quantity,
                    ],
                    
                ];

            });

            // Retornar los productos como JSON con código 200 (éxito)
            return response()->json($cart_products,200);

        } catch (\Exception $e) {// En caso de error
            return response()->json([
                'message' => 'Ocurrió un error.',
                'error'   => $e->getMessage(),
            ], 500);
        }
        

    }

    public function add_product_to_cart(Request $request){
        // Validaciones
        if (!$request->has('account_id') || !$request->has('product_id')) 
            return response()->json(['message' => 'Parámetros incompletos'], 422);

        if (!Account::find($request->input('account_id')))
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        if (!Product::find($request->input('product_id')))
            return response()->json(['message' => 'Producto no encontrado'], 404);

        if (!Inventory::where('product_id', $request->input('product_id'))->exists())
            return response()->json(['message' => 'El producto no está registrado en el inventario'], 404);

        if (!Inventory::where('product_id', $request->input('product_id'))->where('stock', '>', 0)->exists())
            return response()->json(['message' => 'El producto no tiene stock disponible'], 422);

        // Asignar las variables si pasa las validaciones
        $account_id = $request->input('account_id');
        $product_id = $request->input('product_id');

        //Si la cuenta no tiene asociado un carrito, se crea uno
        $cart = Cart::where('account_id', $account_id)->first();
        if (!$cart) 
            $cart = Cart::create(['account_id' => $account_id]);

        if ($cart->products()->where('product_id', $product_id)->first()){ //Si existe
            return response()->json(['message' => 'El producto ya existe en el carrito'], 200);
        } 
        else{  //Si no existe en el carrito
            $cart->products()->attach($product_id, ['quantity' => 1]); // Agrega el producto con cantidad 1
            return response()->json([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => 1,
            ], 200);
        }
    }

    public function delete_product_from_cart($account_id, $product_id){

        if (!Account::find($account_id))
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        if (!Product::find($product_id))
            return response()->json(['message' => 'Producto no encontrado'], 404);

        //Si la cuenta tiene asociado un carrito
        $cart = Cart::where('account_id', $account_id)->first();
        if (!$cart) 
            return response()->json(['message' => 'El carrito está vacio'], 200);

        if ($cart->products()->where('product_id', $product_id)->first()){ //Si existe
            $cart->products()->detach($product_id); // Eliminar el producto del carrito
            return response()->json(['message' => 'Producto eliminado del carrito'], 200);
        } 
        else{  //Si no existe en el carrito
            return response()->json(['message' => 'El producto no existe en el carrito'], 404);
        }
    }

    public function increase_quantity_product_cart(Request $request){
        // Validaciones
        if (!$request->has('account_id') || !$request->has('product_id')) 
            return response()->json(['message' => 'Parámetros incompletos'], 422);

        if (!Account::find($request->input('account_id')))
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        if (!Product::find($request->input('product_id')))
            return response()->json(['message' => 'Producto no encontrado'], 404);

        // Asignar las variables si pasa las validaciones
        $account_id = $request->input('account_id');
        $product_id = $request->input('product_id');

        //Comprobar que exista un carrito asociado a esta cuenta
        $cart = Cart::where('account_id', $account_id)->first();
        if (!$cart) {
            return response()->json(['message' => 'Carrito no encontrado'], 404);
        }

        //Comprobar si el producto existe en este carrito
        $productInCart = $cart->products()->where('product_id', $product_id)->first();
        if ($productInCart) { //Si existe
            $cart->products()->updateExistingPivot($product_id, [
                'quantity' => $productInCart->pivot->quantity + 1, // Incrementamos la cantidad
            ]);
            return response()->json([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => $productInCart->pivot->quantity + 1,
            ], 200);
        }
        else{ //Si no existe
            return response()->json(['message' => 'El producto no está en el carrito'], 404);
        }
    }

    public function decrease_quantity_product_cart(Request $request){
        // Validaciones
        if (!$request->has('account_id') || !$request->has('product_id')) 
            return response()->json(['message' => 'Parámetros incompletos'], 422);

        if (!Account::find($request->input('account_id')))
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        if (!Product::find($request->input('product_id')))
            return response()->json(['message' => 'Producto no encontrado'], 404);

        // Asignar las variables si pasa las validaciones
        $account_id = $request->input('account_id');
        $product_id = $request->input('product_id');

        //Comprobar que exista un carrito asociado a esta cuenta
        $cart = Cart::where('account_id', $account_id)->first();
        if (!$cart) {
            return response()->json(['message' => 'Carrito no encontrado'], 404);
        }

        //Comprobar si el producto existe en este carrito
        $productInCart = $cart->products()->where('product_id', $product_id)->first();
        if ($productInCart) { //Si existe
            if($productInCart->pivot->quantity == 1)
                return response()->json(['message' => 'El minimo de productos es 1'], 422);

            $cart->products()->updateExistingPivot($product_id, [
                'quantity' => $productInCart->pivot->quantity - 1, // Decrementamos la cantidad
            ]);
            return response()->json([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => $productInCart->pivot->quantity - 1,
            ], 200);
        }
        else{ //Si no existe
            return response()->json(['message' => 'El producto no está en el carrito'], 404);
        }
    }

    public function remove_all_products_from_cart(int $account_id){
        //Validaciones
        if (!Account::find($account_id))
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        $cart = Cart::where('account_id', $account_id)->first();
        if (!$cart) 
            return response()->json(['message' => 'Carrito no encontrado'], 404);
        
        // Vaciar el carrito
        $cart->products()->detach();

        return response()->json([], 200);
    }
}
