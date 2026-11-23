<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Listas personalizadas de cada usuario
        Schema::create('user_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            // 'characters' para listas de personajes, 'episodes' para listas de episodios
            $table->string('type', 20);
            // Si se borra el usuario, se borran sus listas
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_lists');
    }
};
