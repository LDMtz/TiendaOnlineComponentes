<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Inserta el registro en la tabla accounts
        $accountId = DB::table('accounts')->insertGetId([ //Recupera el Id que se creó
            'role_id' => 1,
            'username' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => Hash::make('owner123'), // Encripta la contraseña
            'state' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Inserta el registro en la tabla employees usando el ID generado
        DB::table('employees')->insert([
            'names' => 'Owner',
            'last_names' => 'Owner',
            'number' => '1234567890',
            'state' => true,
            'account_id' => $accountId, // Relación con la tabla accounts
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Obtiene el ID del registro de la tabla accounts
        $accountId = DB::table('accounts')
        ->where('email', 'owner@gmail.com')
        ->value('id');

        if ($accountId) {
            // Elimina el registro relacionado en la tabla employees
            DB::table('employees')->where('account_id', $accountId)->delete();

            // Elimina el registro en la tabla accounts
            DB::table('accounts')->where('id', $accountId)->delete();
        }
    }
};
