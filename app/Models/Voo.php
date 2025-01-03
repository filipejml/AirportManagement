<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    use HasFactory;

    /**
     * Os atributos que podem ser atribuídos em massa.
     */
    protected $fillable = [
        'numero_voo',
        'companhia_aerea',
        'modelo_aviao',
        'tipo_voo',
        'tipo_aeronave',
        'qtd_voos',
        'horario_voo',
        'qtd_passageiros',
        'nota_obj',
        'nota_pontualidade',
        'nota_servicos',
        'nota_patio',
    ];

    /**
     * Relacionamento: um voo pertence a uma companhia aérea.
     */
    public function companhiaAerea()
    {
        return $this->belongsTo(CompanhiaAerea::class, 'companhia_aerea', 'nome');
    }

    /**
     * Relacionamento: um voo está associado a um modelo de aeronave.
     */
    public function modeloAeronave()
    {
        return $this->belongsTo(ModeloAeronave::class, 'modelo_aviao', 'modelo');
    }
}
