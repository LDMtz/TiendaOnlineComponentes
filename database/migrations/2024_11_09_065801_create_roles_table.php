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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
        });

        // Insertar los tres registros iniciales y unicos de roles
        DB::table('roles')->insert([
            ['name' => 'Owner'],
            ['name' => 'Admin'],
            ['name' => 'Employee'],
            ['name' => 'Client']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
