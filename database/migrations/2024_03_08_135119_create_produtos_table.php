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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->integer('quantidade');
            $table->decimal('preco', 10, 2);
            $table->string('marca')->nullable();
            $table->string('fornecedor')->nullable();
            $table->string('categoria')->nullable();
            $table->date('data_de_validade')->nullable();
            $table->string('codigo_de_barras')->nullable();
            $table->dateTime('data_de_entrada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
