<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', [FlightController::class, 'welcome']); // Página de boas-vindas
Route::get('/flights', [FlightController::class, 'index']); // Lista de voos

// Rotas de voos (CRUD)
Route::resource('flights', FlightController::class);

// Rotas de companhias aéreas (CRUD)
Route::resource('companies', CompanyController::class);
