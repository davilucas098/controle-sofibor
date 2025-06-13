<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('componentes', function (Blueprint $table) {
        $table->id();
        $table->string('codigo_interno')->unique();
        $table->string('nome');
        $table->integer('quantidade_disponivel')->default(0);
        $table->enum('tipo', ['normal', 'soldado', 'pronto_para_banho']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componentes');
    }
};
