<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voos', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('numero_voo')->unique(); // Número do voo, deve ser único
            $table->string('companhia_aerea'); // Nome da companhia aérea
            $table->string('modelo_aviao'); // Nome do modelo da aeronave
            $table->enum('tipo_voo', ['Regular', 'Charter']); // Tipo de voo
            $table->enum('tipo_aeronave', ['PC', 'MC', 'LC']); // Tipo de aeronave
            $table->integer('qtd_voos'); // Quantidade de voos
            $table->enum('horario_voo', ['EAM', 'AM', 'AN', 'PM', 'ALL']); // Horário do voo
            $table->integer('qtd_passageiros'); // Quantidade de passageiros
            $table->integer('nota_obj'); // Nota de objetividade
            $table->integer('nota_pontualidade'); // Nota de pontualidade
            $table->integer('nota_servicos'); // Nota dos serviços
            $table->integer('nota_patio'); // Nota do pátio
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
        Schema::dropIfExists('voos');
    }
}
