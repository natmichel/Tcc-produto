<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Desafio extends Model{
    use HasFactory;

    protected $fillable =[
        'title',
        'body',
        'dificuldade'
    ];

    public function alternativas(){
        return $this->hasMany(Alternativa::class);
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }
}
