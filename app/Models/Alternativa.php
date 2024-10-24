<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model{
    use HasFactory;

    protected $fillable = ['text'];

    public function desafios(){
        return $this->belongsTo(Desafio::class);
    }
}
