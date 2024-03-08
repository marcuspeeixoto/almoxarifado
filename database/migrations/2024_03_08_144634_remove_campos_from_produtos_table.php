<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCamposFromProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('data_de_atualizacao');
            $table->dropColumn('observacoes');
            $table->dropColumn('localizacao');
            $table->dropColumn('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dateTime('data_de_atualizacao')->nullable();
            $table->text('observacoes')->nullable();
            $table->string('localizacao')->nullable();
            $table->text('descricao')->nullable();

        });
    }
}