<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_ato') ->unsigned();
            $table->integer('periodo_letivo')->unsigned();
            $table->string('situacão');
            $table->string('titulo_ato');
            $table->string('descricao_ato');
            $table->string('data_de_criacao');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atos');
    }
}
