<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponenteCurricularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componentes_curriculares', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diario_id');
            $table->string('codigo');
            $table->string('nome');

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
        Schema::dropIfExists('componentes_curriculares');
    }
}
