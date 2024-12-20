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
            Schema::create('accounts', function (Blueprint $table) {
                $table->id('id');
                $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
                $table->string('username', 50);
                $table->string('email', 200)->unique();
                $table->string('password');
                $table->binary('picture_profile')->nullable();; // BLOB
                $table->boolean('state')->default(true);
                $table->timestamps();
            });

            //Cambiando el dato a MEDIUM BLOB
            DB::statement('ALTER TABLE accounts MODIFY picture_profile MEDIUMBLOB');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
