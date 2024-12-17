<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class AuthController extends Controller
{
    public function index(){
        // Llamamos a la función para cargar los primeros 10 productos
        $products = $this->loadProducts(10);

        return view('clients.home',compact('products'));
    }

    public function login_form(){
        return view("auth.login");
    }

    public function home(){
        if (Auth::user()->role_id == 4) {
            $products = $this->loadProducts(10);
            return view('clients.home', compact('products'));
        } else {
            return view('employees.home');
        }

    }

    public function to_logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function to_login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('home');
        }else{
            return back()->withErrors(['login' => 'Credenciales incorrectas']);
        }
    }

    // Función que carga y formatea los productos
    private function loadProducts($limit = 10) {
        return Product::with([
            'inventory',               // Relación con Inventory para obtener el precio y stock
            'pictures',                // Relación con ProductPicture para obtener la imagen
            'tags'                     // Relación con Tag para obtener las etiquetas
        ])
        ->limit($limit)                   // Limita a los productos que desees
        ->get()
        ->map(function($product) {
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
            $state = $product->inventory ? ($product->inventory->stock > 0 ? true : false) : false;

            // Obtenemos las rutas de las etiquetas asociadas al producto
            $labelPaths = $product->tags->pluck('path')->toArray();

            // Obtenemos la primera imagen asociada al producto y la convertimos a base64
            $imageBase64 = $product->pictures->first() 
                ? base64_encode($product->pictures->first()->picture) 
                : null;

            // Formateamos el precio con dos decimales
            $price = $product->inventory && $product->inventory->sale_price 
                ? number_format($product->inventory->sale_price, 2, '.', '') 
                : null;

            // Creamos el array con los datos formateados
            return [
                'id'            => $product->id,
                'name'          => $name,  // El nombre combinado
                'state'         => $state, // Estado basado en el stock
                'price'         => $price,  // Precio de venta desde Inventory
                'labelPaths'    => $labelPaths,  // Rutas de las etiquetas asociadas
                'image'         => $imageBase64, // Imagen en base64
            ];
        });
    }

}
