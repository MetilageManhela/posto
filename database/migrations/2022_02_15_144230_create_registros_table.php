<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->unsignedInteger('funcionario_id');
            $table->unsignedInteger('equipamento_id');

            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');

            $table->foreign('equipamento_id')->references('id')->on('equipamentos')->onDelete('cascade');
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
        Schema::dropIfExists('registros');
    }
}
