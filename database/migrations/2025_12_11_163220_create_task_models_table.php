<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('title', 255); 
        $table->text('description')->nullable(); 
        $table->boolean('completed')->default(false); 

        // Añade esta línea: crea la columna y la vincula con la tabla usuarios
        $table->foreignId('user_id')->constrained()->onDelete('cascade');

        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};