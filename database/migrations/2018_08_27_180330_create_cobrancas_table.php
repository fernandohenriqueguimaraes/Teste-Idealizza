<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobrancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobrancas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agencia');
            $table->integer('conta');
            $table->string('banco');
            $table->double('mensalidade');
            $table->integer('aluno_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('cobrancas', function (Blueprint $table) {
            $table->foreign('aluno_id')->references('id')->on('alunos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cobrancas');
    }
}
