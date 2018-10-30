<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAtos extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('atos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_do_ato')->unsigned();
            $table->integer('periodo_letivo')->unsigned();
            $table->string('situacao');
            $table->string('responsavel');
            $table->string('data_de_criacao');
            $table->string('titulo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('atos');
    }

}
