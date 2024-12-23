<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosAeronavesTable extends Migration
{
    public function up()
    {
        Schema::create('modelos_aeronaves', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->integer('capacidade_passageiros');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modelos_aeronaves');
    }
}
