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
            $table->string('group', 3);
            $table->string('type', 1);
            $table->string('description', 300);
        });

        // Agregamos todos los permisos del sistema manualmente
        /*
            Tipos de permisos:
                R (Raro): Solo el OWNER tiene este permiso. El OWNER no lo puede heredar.
                U (Unico): Solo el OWNER y ADMIN pueden tener este permiso, El ADMIN no lo puede heredar
                G (General): El OWNER, ADMIN y EMPL pueden tener este permiso. Es hereable
        */
        DB::table('permissions')->insert([
            // Grupo 001 - Sección Permisos
            ['group' => '001', 'name' => 'PV_AccederSeccionPermisos', 'type' => 'U', 'description' => 'Le permite visualizar la seccion Permisos al usuario.'],
            ['group' => '001', 'name' => 'PE_OtorgarPermiso', 'type' => 'U', 'description' => 'Permite al usuario otorgarle permisos a un empleado.'],
            ['group' => '001', 'name' => 'PE_QuitarPermiso', 'type' => 'U', 'description' => 'Permite al usuario quitarle permisos a un empleado.'],
            ['group' => '001', 'name' => 'PE_ConsultarPermisos', 'type' => 'U', 'description' => 'Permite consultar los permisos del sistema.'],
            
            // Grupo 002 - Sección Empleados
            ['group' => '002', 'name' => 'PV_AccesoSeccionEmpleado', 'type' => 'G', 'description' => 'Le permite visualizar la seccion Empleado al usuario.'],
            ['group' => '002', 'name' => 'PE_RegistrarEmpleado', 'type' => 'U', 'description' => 'Permite al usuario registrar un empleado.'],
            ['group' => '002', 'name' => 'PE_ModificarEmpleado', 'type' => 'U', 'description' => 'Permite al usuario modificar un empleado.'],
            ['group' => '002', 'name' => 'PE_EliminarEmpleado', 'type' => 'U', 'description' => 'Permite eliminar empleados del sistema.'],
            ['group' => '002', 'name' => 'PE_ConsultarEmpleado', 'type' => 'G', 'description' => 'Permite consultar los empleados sistema.']
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
