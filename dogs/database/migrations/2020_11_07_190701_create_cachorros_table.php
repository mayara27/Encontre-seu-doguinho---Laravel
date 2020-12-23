<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCachorrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cachorros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cor');
            $table->string('porte');
            $table->string('pelagem');
            $table->string('descricao');
            $table->string('imagem');
            $table->string('nome');
            $table->string('telefone');
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
        Schema::dropIfExists('cachorros');
    }
}
