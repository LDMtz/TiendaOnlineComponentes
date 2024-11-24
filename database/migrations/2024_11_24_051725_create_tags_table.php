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
                'name' => 'discount',
                'path' => 'etiqueta-desc.png',
            ],
            [
                'name' => 'exclusive',
                'path' => 'etiqueta-exclusive.png',
            ],
            [
                'name' => 'new',
                'path' => 'etiqueta-new.png',
            ],
            [
                'name' => 'free_shipping',
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
