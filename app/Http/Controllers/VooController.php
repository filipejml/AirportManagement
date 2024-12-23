<?php

namespace App\Http\Controllers;

use App\Models\Voo;
use Illuminate\Http\Request;

class VooController extends Controller
{
    public function create()
    {
        return view('cadastro-voos');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero_voo' => 'required|unique:voos',
            'companhia_aerea' => 'required',
            'modelo_aviao' => 'required',
            'tipo_voo' => 'required',
            'tipo_aeronave' => 'required',
            'qtd_voos' => 'required|integer',
            'horario_voo' => 'required|date_format:H:i',
            'qtd_passageiros' => 'required|integer',
            'nota_obj' => 'required|integer|between:1,5',
            'nota_pontualidade' => 'required|integer|between:1,5',
            'nota_servicos' => 'required|integer|between:1,5',
            'nota_patio' => 'required|integer|between:1,5',
        ]);

        Voo::create($validated);

        return redirect()->back()->with('success', 'Voo cadastrado com sucesso!');
    }
}
