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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
        });

        // Insertar las etiquetas
        DB::table('tags')->insert([
            [
                'name' => 'DESCUENTO',
                'path' => 'etiqueta-desc.png',
            ],
            [
                'name' => 'EXCLUSIVO',
                'path' => 'etiqueta-exclusive.png',
            ],
            [
                'name' => 'NUEVO',
                'path' => 'etiqueta-new.png',
            ],
            [
                'name' => 'ENVIO GRATIS',
                'path' => 'etiqueta-envio.png',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
