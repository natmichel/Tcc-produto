<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    /** @use HasFactory<\Database\Factories\RespostaFactory> */
    use HasFactory;

    public function usuarios(){
        return $this->belongsTo(User::class);
    }

    public function desafios(){
        return $this->belongsTo(Desafio::class);
    }

    public function alternativas(){
        return $this->belongsTo(Alternativa::class);
    }

}
