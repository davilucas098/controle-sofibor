<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('resposta_separacaos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pedido_separacao_id')->constrained('pedido_separacaos')->onDelete('cascade');
        $table->integer('quantidade_separada');
        $table->float('peso_total')->nullable();
        $table->string('tratamento')->nullable(); // ex: Fosfato
        $table->string('local_banho')->nullable(); // ex: SuperCast
        $table->date('data_envio_banho')->nullable();
        $table->text('observacoes')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resposta_separacaos');
    }
};
