<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Migration para incluir a chave estrangeira nas tabelas criadas anteriormente
     */
    public function up(): void
    {
        // Adiciona a chave estrangeira para arma primária na tabela personagens
        Schema::table('personagens', function (Blueprint $table) {
            $table->foreign('id_arma_primaria')->references('id')->on('armas');
            $table->foreign('id_arma_secundaria')->references('id')->on('armas')->nullable();
            $table->foreign('id_mochila')->references('id')->on('mochilas');
        });

        Schema::table('itens_mochila', function (Blueprint $table) {
            $table->foreign('id_mochila')->references('id')->on('mochilas');
            $table->foreign('id_arma')->references('id')->on('armas');         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
