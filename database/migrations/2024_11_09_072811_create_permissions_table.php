<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 300);
        });

        // Agregamos todos los permisos del sistema manualmente
        DB::table('permissions')->insert([
            [
                'name' => 'P_RegistrarEmpleado',
                'description' => 'Permite al usuario registrar un empleado.'
            ],
            [
                'name' => 'P_ModificarEmpleado',
                'description' => 'Permite al usuario modificar un empleado.'
            ],
            [
                'name' => 'P_EliminarEmpleado',
                'description' => 'Permite eliminar empleados del sistema.'
            ],
            //... En un futuro se agregarán todos los permisos
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
