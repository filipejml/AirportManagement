<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloAeronave extends Model
{
    use HasFactory;

    /**
     * Os atributos que podem ser atribuídos em massa.
     */
    protected $fillable = ['modelo', 'capacidade_passageiros'];

    /**
     * Relacionamento: um modelo de aeronave pode ser operado por várias companhias aéreas.
     */
    public function companhiasAereas()
    {
        return $this->belongsToMany(CompanhiaAerea::class, 'companhia_aeronave');
    }

    /**
     * Relacionamento: um modelo de aeronave pode estar associado a vários voos.
     */
    public function voos()
    {
        return $this->hasMany(Voo::class, 'modelo_aviao', 'modelo');
    }
}
