<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoosTable extends Migration
{
    public function up()
    {
        Schema::create('voos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_voo')->unique();
            $table->string('companhia_aerea');
            $table->string('modelo_aviao');
            $table->string('tipo_voo');
            $table->string('tipo_aeronave');
            $table->integer('qtd_voos');
            $table->time('horario_voo');
            $table->integer('qtd_passageiros');
            $table->integer('nota_obj');
            $table->integer('nota_pontualidade');
            $table->integer('nota_servicos');
            $table->integer('nota_patio');
            $table->timestamps(); // Inclui data de inserção e atualização automática
        });
    }

    public function down()
    {
        Schema::dropIfExists('voos');
    }
}
