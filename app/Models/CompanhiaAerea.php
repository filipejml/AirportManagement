<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanhiaAerea extends Model
{
    use HasFactory;

    /**
     * Os atributos que podem ser atribuídos em massa.
     */
    protected $fillable = ['nome'];

    /**
     * Relacionamento: uma companhia aérea pode ter muitos modelos de aeronaves.
     */
    public function modelosAeronaves()
    {
        return $this->belongsToMany(ModeloAeronave::class, 'companhia_aeronave');
    }

    /**
     * Relacionamento: uma companhia aérea pode ter muitos voos.
     */
    public function voos()
    {
        return $this->hasMany(Voo::class, 'companhia_aerea', 'nome');
    }
}
