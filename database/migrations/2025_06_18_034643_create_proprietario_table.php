<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proprietario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 100);
            $table->char('cpf', 11);
            $table->string('telefone', 15); 
            $table->string('email', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proprietario');
    }
};
