<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VooController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/cadastro-voos', 'cadastro-voos')->name('cadastro.voos');
Route::view('/lista-voos', 'lista-voos')->name('lista.voos');
Route::view('/companhias-aereas', 'companhias-aereas')->name('companhias.aereas');
Route::view('/dashboard', 'dashboard')->name('dashboard');


Route::get('/cadastro-voos', [VooController::class, 'create'])->name('cadastro.voos');
Route::post('/cadastro-voos', [VooController::class, 'store'])->name('voos.store');
