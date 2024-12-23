<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    // Método para exibir a tela de boas-vindas
    public function welcome()
    {
        return view('welcome'); // Carrega a view 'welcome.blade.php'
    }

    // Método para listar os voos
    public function index()
    {
        // Aqui você pode pegar os dados dos voos e passá-los para a view
        $flights = \App\Models\Flight::all(); // Exemplo de como pegar todos os voos
        return view('flights.index', compact('flights')); // Renderiza a lista de voos
    }
}
