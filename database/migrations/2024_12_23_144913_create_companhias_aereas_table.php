<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanhiasAereasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companhias_aereas', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome')->unique(); // Nome da companhia aérea, deve ser único
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
        Schema::dropIfExists('companhias_aereas');
    }
}
