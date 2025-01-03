<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosAeronavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_aeronaves', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('modelo')->unique(); // Nome do modelo, deve ser único
            $table->integer('capacidade_passageiros'); // Capacidade de passageiros do modelo
            $table->timestamps(); // Campos automáticos: created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos_aeronaves');
    }
}
