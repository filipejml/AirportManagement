<?php

namespace App\Http\Controllers;

use App\Models\Voo;
use App\Models\CompanhiaAerea;
use App\Models\ModeloAeronave;
use Illuminate\Http\Request;

class VooController extends Controller
{
    /**
     * Exibe o formulário para cadastrar um novo voo.
     */
    public function create()
    {
        // Busca todas as companhias aéreas e passa para o formulário
        $companhiasAereas = CompanhiaAerea::all();

        return view('cadastro-voos', compact('companhiasAereas'));
    }

    /**
     * Processa o envio do formulário e salva o voo no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos campos enviados pelo formulário
        $validated = $request->validate([
            'numero_voo' => 'required|unique:voos',
            'companhia_aerea' => 'required|exists:companhias_aereas,id',
            'modelo_aviao' => 'required|exists:modelos_aeronaves,id',
            'tipo_voo' => 'required|in:Regular,Charter',
            'tipo_aeronave' => 'required|in:PC,MC,LC',
            'qtd_voos' => 'required|integer|min:1',
            'horario_voo' => 'required|in:EAM,AM,AN,PM,ALL',
            'qtd_passageiros' => 'required|integer|min:1',
            'nota_obj' => 'required|integer|between:1,5',
            'nota_pontualidade' => 'required|integer|between:1,5',
            'nota_servicos' => 'required|integer|between:1,5',
            'nota_patio' => 'required|integer|between:1,5',
        ]);

        // Cria o registro do voo no banco
        Voo::create([
            'numero_voo' => $validated['numero_voo'],
            'companhia_aerea' => CompanhiaAerea::find($validated['companhia_aerea'])->nome,
            'modelo_aviao' => ModeloAeronave::find($validated['modelo_aviao'])->modelo,
            'tipo_voo' => $validated['tipo_voo'],
            'tipo_aeronave' => $validated['tipo_aeronave'],
            'qtd_voos' => $validated['qtd_voos'],
            'horario_voo' => $validated['horario_voo'],
            'qtd_passageiros' => $validated['qtd_passageiros'],
            'nota_obj' => $validated['nota_obj'],
            'nota_pontualidade' => $validated['nota_pontualidade'],
            'nota_servicos' => $validated['nota_servicos'],
            'nota_patio' => $validated['nota_patio'],
        ]);

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Voo cadastrado com sucesso!');
    }
}
