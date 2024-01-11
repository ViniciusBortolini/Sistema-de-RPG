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
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('nivel');
            $table->text('descricao');
            $table->integer('idade');
            $table->integer('forca');
            $table->integer('vitalidade');
            $table->integer('destreza');
            $table->integer('poder');
            $table->unsignedBigInteger('id_arma_primaria');
            $table->unsignedBigInteger('id_arma_secundaria')->nullable();
            $table->unsignedBigInteger('id_mochila');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};
