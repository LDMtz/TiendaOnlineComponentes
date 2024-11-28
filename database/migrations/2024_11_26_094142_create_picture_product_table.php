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
        Schema::create('picture_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->binary('picture'); // Almacenará la imagen en formato BLOB

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        //Cambiando el dato a MEDIUM BLOB
        DB::statement('ALTER TABLE picture_product MODIFY picture MEDIUMBLOB');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture_product');
    }
};
