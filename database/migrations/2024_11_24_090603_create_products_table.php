<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->json('data'); // JSON 
            $table->boolean('state'); // Boolean 
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Foreign Key to categories
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade'); // Foreign Key to suppliers
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
