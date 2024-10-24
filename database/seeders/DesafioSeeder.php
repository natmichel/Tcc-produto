<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Desafio;
use App\Models\Alternativa;
use App\Models\Tag;

class DesafioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Desafio::factory(20)
        ->has(Alternativa::factory()->count(3))
        ->has(Tag::factory()->count(3))
        ->create();
    }
}
