<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('banhos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('componente_id')->constrained()->onDelete('cascade');
        $table->string('tipo_tratamento'); // Zinco, Fosfato
        $table->string('local');
        $table->float('peso');
        $table->date('data_saida');
        $table->string('destino_final'); // Samy, Cachoeira
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banhos');
    }
};
