<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desafio>
 */
class DesafioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'resposta_id' =>\App\Models\Resposta::factory(),
            'body' => fake()->text(),
            'dificuldade' => fake()->text()
        ];
    }
}
