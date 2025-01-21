<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Account;
use App\Models\Client;

use Illuminate\Support\Facades\Auth;

class API_AccountController extends Controller
{

    public function store_client(Request $request){
        //Si viene estructurado de forma anidada
        if ($request->has('account') && $request->has('client')) {
            $request->merge([
                'username' => $request->input('account.username'),
                'email' => $request->input('account.email'),
                'password' => $request->input('account.password'),
                'picture_profile' => $request->input('account.picture_profile', null), // Asegurar null por defecto
                'names' => $request->input('client.names'),
                'last_names' => $request->input('client.last_names'),
                'number' => $request->input('client.number'),
            ]);
        }

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:accounts,username',
            'email' => 'required|email|max:200|unique:accounts,email',
            'password' => 'required|string|min:8',
            'picture_profile' => 'nullable|image|max:8192', // Máximo 8 MB
            'names' => 'required|string|max:100',
            'last_names' => 'required|string|max:100',
            'number' => 'required|string|size:10',
        ]);

        if($validator->fails()){
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data,400);
        }

        $validatedData = $validator->validated();

        // Procesar la imagen si se sube
        if ($request->hasFile('picture_profile')) {
            $image = $request->file('picture_profile');
            $binary_image = file_get_contents($image->getRealPath());
        } else {
            $binary_image = null;
        }

        // Crear la cuenta
        $newAccount = Account::create([
            'role_id' => 4,
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'picture_profile' => $binary_image,
            'state' => true
        ]);

        if(!$newAccount){
            $data = [
                'message' => 'Error al crear la cuenta',
                'status' => 500
            ];
            return response()->json($data,500);
        }

        // Crear el cliente asociado
        $newClient = Client::create([
            'names' => $validatedData['names'],
            'last_names' => $validatedData['last_names'],
            'number' => $validatedData['number'],
            'state' => true,
            'account_id' => $newAccount->id,
        ]);

        if(!$newClient){
            $data = [
                'message' => 'Error al crear el cliente',
                'status' => 500
            ];
            return response()->json($data,500);
        }

        //Si todo se ejectuó sin problemas
        $data = [
            'message' => 'Cliente y cuenta creada y asociada correctamente',
            'account' => $newAccount,
            'client' => $newClient,
            'status' => 201
        ];

        return response()->json($data,201);

    }

    public function validate_credentials(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if(!Auth::attempt($credentials)){
            $data = [
                'message' => 'Credenciales incorrectas',
                'status' => false,
            ];
            return response()->json($data, 401);
        }

        $account = Auth::user();

        // Si las credenciales son válidas
        $data = [
            'message' => 'Credenciales válidas',
            'account_id' => $account->id,
            'role_id' => $account->role_id,
            'status' => true,
        ];

        return response()->json($data, 200);
    }

    public function get_data_account(string $id){
        $account = Account::with(['client', 'employee'])->find($id);

        if (!$account) {
            return response()->json([
                'message' => 'Cuenta no encontrada',
                'status' => false,
            ], 404);
        }

        if($account->client){
            $data = [
                'account' => [
                    'id' => $account->id,
                    'role_id' => $account->role_id,
                    'username' => $account->username,
                    'email' => $account->email,
                    'state' => (bool)$account->state,
                    'picture_profile' => $account->picture_profile ? base64_encode($account->picture_profile) : null,
                ],
                'client' => [
                    'id' => $account->client->id,
                    'names' => $account->client->names,
                    'last_names' => $account->client->last_names,
                    'number' => $account->client->number,
                    'state' => (bool)$account->client->state,
                ],
            ];
        }

        if($account->employee){
            $data = [
                'account' => [
                    'id' => $account->id,
                    'role_id' => $account->role_id,
                    'username' => $account->username,
                    'email' => $account->email,
                    'state' => (bool)$account->state,
                    'picture_profile' => $account->picture_profile ? base64_encode($account->picture_profile) : null,
                ],
                'employee' => [
                    'id' => $account->employee->id,
                    'names' => $account->employee->names,
                    'last_names' => $account->employee->last_names,
                    'number' => $account->employee->number,
                    'state' => (bool)$account->employee->state,
                ],
            ];
        }

        return response()->json($data, 200);

    }

}
