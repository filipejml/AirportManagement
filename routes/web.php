<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VooController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/cadastro-voos', 'cadastro-voos')->name('cadastro.voos');
Route::view('/lista-voos', 'lista-voos')->name('lista.voos');
Route::view('/companhias-aereas', 'companhias-aereas')->name('companhias.aereas');
Route::view('/dashboard', 'dashboard')->name('dashboard');


Route::get('/cadastro-voos', [VooController::class, 'create'])->name('cadastro.voos');
Route::post('/cadastro-voos', [VooController::class, 'store'])->name('voos.store');
=======
// Página inicial
Route::get('/', [FlightController::class, 'welcome']); // Página de boas-vindas
Route::get('/flights', [FlightController::class, 'index']); // Lista de voos

// Rotas de voos (CRUD)
Route::resource('flights', FlightController::class);

// Rotas de companhias aéreas (CRUD)
Route::resource('companies', CompanyController::class);
>>>>>>> cb8d29f63a383d5b08645f5ff068a0e7c5d21a76
