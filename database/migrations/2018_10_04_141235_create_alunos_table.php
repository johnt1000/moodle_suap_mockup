<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diario_id');
            $table->string('nome');
            $table->string('username');
            $table->string('tipo');
            $table->string('email_academico');
            $table->string('email_secundario');
            $table->boolean('status');

            $table->foreign('diario_id')->references('id')->on('diarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
