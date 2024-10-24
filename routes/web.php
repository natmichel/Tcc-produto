<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Desafio;
use App\Http\Controllers\DesafioController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/desafios', [DesafioController::class, 'index']);

Route::get('/desafio/{id}', function($id){
    // $desafio = Arr::first(Desafio::all(), fn($desafio) => $desafio['id'] == $id);
    $desafio = Desafio::find($id);

    return view('desafio', ['desafio' => $desafio]);
});

