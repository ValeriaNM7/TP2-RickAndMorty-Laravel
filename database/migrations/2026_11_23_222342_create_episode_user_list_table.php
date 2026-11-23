<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Episodios que tiene cada lista (relacion muchos a muchos)
        Schema::create('episode_user_list', function (Blueprint $table) {
            $table->foreignId('user_list_id')->constrained('user_lists')->onDelete('cascade');
            // integer porque el id de episodes del TP1 es INT
            $table->integer('episode_id');
            $table->foreign('episode_id')->references('id')->on('episodes');
            // La clave compuesta no deja repetir un episodio en la misma lista
            $table->primary(['user_list_id', 'episode_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('episode_user_list');
    }
};
