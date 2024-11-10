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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('names',100);
            $table->string('last_names',100);
            $table->string('number',10);
            $table->string('email',200)->unique();
            $table->boolean('state')->default(true);
            $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade'); // Foreign Key referencing `accounts`
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
