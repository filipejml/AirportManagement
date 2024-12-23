<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->string('company_id'); // Chave estrangeira para a tabela companies
            $table->string('flight_type'); // Regular ou Charter
            $table->string('aircraft_type'); // PC, MC, ou LC
            $table->integer('number_of_flights');
            $table->string('time_slot'); // EAM, AM, AN, PM
            $table->integer('passengers')->nullable();
            $table->timestamps(); // Inclui created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
