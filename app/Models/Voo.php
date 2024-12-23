<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_voo', 'companhia_aerea', 'modelo_aviao', 'tipo_voo', 
        'tipo_aeronave', 'qtd_voos', 'horario_voo', 'qtd_passageiros',
        'nota_obj', 'nota_pontualidade', 'nota_servicos', 'nota_patio',
    ];
}
