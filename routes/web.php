<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Página inicial, pode ser substituída por outra view ou lógica.
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cadastro-voos', [FlightController::class, 'create'])->name('flights.create');
Route::get('/lista-voos', [FlightController::class, 'index'])->name('flights.index');
Route::get('/companhias-aereas', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
