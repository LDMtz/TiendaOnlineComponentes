<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Account;
use App\Models\Sale;
use App\Models\SaleDetail;

class API_SaleController extends Controller
{
    public function store_sale(int $account_id){
        $account = Account::find($account_id);
        if (!$account)
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        $client = $account->client;
        if (!$client)
            return response()->json(['message' => 'Cliente no asociado a la cuenta'], 404);

        $cart = Cart::where('account_id', $account_id)->with('products')->first();
        if (!$cart || $cart->products->isEmpty())
            return response()->json(['message' => 'El carrito está vacío o no existe.'], 400);

        // Iniciar una transacción para garantizar la atomicidad
        DB::beginTransaction();

        try {
            $orderNumber = 'ORD-' . strtoupper(uniqid()); // Generar un número de orden único

            // Calcular el monto total y los subtotales
            $totalAmount = 0;
            $totalProductCount = 0;
            $saleDetails = [];

            foreach ($cart->products as $product) {
                $inventory = $product->inventory;

                if (!$inventory)
                    throw new \Exception("Precio no asignado al producto con ID: {$product->id}");
                if ($inventory->stock < $product->pivot->quantity)
                    throw new \Exception("Stock insuficiente para el producto con ID: {$product->id}");
                
                $subtotal = $inventory->sale_price * $product->pivot->quantity;
                $saleDetails[] = [
                    'product_id' => $product->id,
                    'quantity' => $product->pivot->quantity,
                    'subtotal' => $subtotal,
                ];
                $totalAmount += $subtotal;
                $totalProductCount += $product->pivot->quantity;

                // Restar el stock del inventario
                $inventory->stock -= $product->pivot->quantity;
                $inventory->save();
            }

            // Crear la venta
            $sale = Sale::create([
                'order_number' => $orderNumber,
                'client_id' => $client->id,
                'total_amount' => $totalAmount,
            ]);

            // Crear los detalles de la venta
            foreach ($saleDetails as &$detail) {
                $detail['sale_id'] = $sale->id;
            }
            SaleDetail::insert($saleDetails);

            // Vaciar el carrito
            $cart->products()->detach();

            // Confirmar la transacción
            DB::commit();

            // Modificar la respuesta para que sea compatible con la clase Sale
            $sale_response = [
                'id' => $sale->id,
                'order_number' => $sale->order_number,
                'total_amount' => $sale->total_amount,
                'created_at' => $sale->created_at->format('d/m/y'), 
                'products_count' => $totalProductCount,
                'details' => $saleDetails,
            ];

            return response()->json($sale_response, 201);
            
        } catch (\Exception $e) {
            DB::rollBack(); // Revertir la transacción en caso de error
            return response()->json(['message' => 'Error al registrar la venta.','error' => $e->getMessage()], 500);
        }
    }

    public function get_sale(int $sale_id){
        $sale = Sale::where('id', $sale_id)
            ->with(['saleDetails.product']) // Cargar detalles de la venta y los productos
            ->first();

        if (!$sale) 
            return response()->json(['message' => 'Venta no encontrada o no pertenece al cliente'], 404);

        // Calcular el total de productos
        $totalProductCount = $sale->saleDetails->sum('quantity');

        // Formatear los detalles de la venta
        $saleDetails = $sale->saleDetails->map(function ($detail) {
            // Formatear el nombre del producto
            $data = $detail->product->data;
            $generalData = $data['data']['general-data'];
            $name = $generalData['name'] . ' ' . $generalData['brand'] . ' ' . $generalData['model'];
            $specificData = $data['data']['specific-data'] ?? [];
            $specificDataString = '';
            foreach ($specificData as $key => $value) {
                $specificDataString .= $key . ' ' . $value . ' / ';
            }
            $specificDataString = rtrim($specificDataString, ' / ');
            $name .= ' / ' . $specificDataString;

            // Recuperar la imagen
            $picture = $detail->product->pictures()->first();
            $base64Image = null;

            if ($picture)
                $base64Image = base64_encode($picture->picture);

            return [
                'product_id' => $detail->product_id,
                'quantity' => $detail->quantity,
                'subtotal' => $detail->subtotal,
                'product_name' => $name,
                'image' => $base64Image,
            ];
        });

        // Formatear la respuesta
        $response = [
            'id' => $sale->id,
            'order_number' => $sale->order_number,
            'total_amount' => $sale->total_amount,
            'created_at' => $sale->created_at->format('d/m/y'),
            'products_count' => $totalProductCount,
            'details' => $saleDetails,
        ];

        return response()->json($response, 200);
    }

    public function get_client_sales(int $account_id){
        $account = Account::find($account_id);
        if (!$account)
            return response()->json(['message' => 'Cuenta no encontrada'], 404);

        $client = $account->client;
        if (!$client)
            return response()->json(['message' => 'Cliente no asociado a la cuenta'], 404);

        // Obtener todas las ventas del cliente
        $sales = Sale::where('client_id', $client->id)->get();;

        // Verificar si el cliente tiene ventas
        if ($sales->isEmpty())
            return response()->json(['message' => 'El cliente no tiene ventas registradas'], 404);

        // Formatear la respuesta
        $response = $sales->map(function ($sale) {
            return [
                'id' => $sale->id,
                'order_number' => $sale->order_number,
                'total_amount' => $sale->total_amount,
                'created_at' => $sale->created_at->format('d/m/y'),
                'products_count' => $sale->saleDetails->sum('quantity'), 
            ];
        });

        return response()->json($response, 200);
    }

}
