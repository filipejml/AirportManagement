<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Página inicial, pode ser substituída por outra view ou lógica.
})->name('home');

