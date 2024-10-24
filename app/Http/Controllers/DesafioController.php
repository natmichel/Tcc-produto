<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Desafio;

class DesafioController extends Controller{
    public function index(){
        // $desafios = Desafio::paginate(10);
        $desafios = Desafio::all();
        return view('desafios', [
            'desafios' => $desafios,
        ]);
    }

    // public function show(Desafio $desafio){
    //     return view('desafio.show', ['desafio' => $desafio]);
    // }
}
