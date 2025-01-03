<?php

use App\Models\ModeloAeronave;

public function run()
{
    ModeloAeronave::create(['modelo' => 'Boeing 737', 'capacidade_passageiros' => 189]);
    ModeloAeronave::create(['modelo' => 'Airbus A320', 'capacidade_passageiros' => 180]);
    ModeloAeronave::create(['modelo' => 'Embraer E190', 'capacidade_passageiros' => 106]);
}
