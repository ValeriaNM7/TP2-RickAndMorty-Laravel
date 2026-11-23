<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Personajes que tiene cada lista (relacion muchos a muchos)
        Schema::create('character_user_list', function (Blueprint $table) {
            $table->foreignId('user_list_id')->constrained('user_lists')->onDelete('cascade');
            // integer porque el id de characters del TP1 es INT
            $table->integer('character_id');
            $table->foreign('character_id')->references('id')->on('characters');
            // La clave compuesta no deja repetir un personaje en la misma lista
            $table->primary(['user_list_id', 'character_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('character_user_list');
    }
};
