<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('fornecimentos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('produto_id');
        $table->unsignedBigInteger('setor_id');
        $table->integer('quantidade');
        $table->timestamps();

        $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        $table->foreign('setor_id')->references('id')->on('setores')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecimentos');
    }
};
