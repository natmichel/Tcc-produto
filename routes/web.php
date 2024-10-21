<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Desafio;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/desafios', function(){
    return view('desafios', [
        'desafios' => Desafio::all()
    ]);
});

Route::get('/desafio/{id}', function($id){
    $desafio = Arr::first(Desafio::all(), fn($desafio) => $desafio['id'] == $id);
    
    return view('desafio', ['desafio' => $desafio]);
});

