<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Desafio extends Model{
    use HasFactory;
    use HasUuids;

    protected $fillable =['title', 'body', 'dificuldade'];

    public function respostas(){
        return $this->hasMany(Resposta::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
