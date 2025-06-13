<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('pedido_separacaos', function (Blueprint $table) {
        $table->id();
        $table->date('data_pedido');
        $table->string('numero_sc');
        $table->date('data_prevista');
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Cabral
        $table->text('observacoes')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_separacaos');
    }
};
