<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Garante suporte a FK no MySQL

            $table->id();
            $table->timestamps();
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->integer('preco');
            $table->date('data_publicacao');

            // Chaves estrangeiras
            $table->unsignedBigInteger('id_proprietario');
            $table->unsignedBigInteger('id_veiculo');

            $table->foreign('id_proprietario')->references('id')->on('proprietario');
            $table->foreign('id_veiculo')->references('id')->on('veiculo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anuncio');
    }
};
