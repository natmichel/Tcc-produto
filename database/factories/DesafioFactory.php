<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alternativa;
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

    public function definition(): array{
        return [
            'title' => fake()->jobTitle(),
            'body' => fake()->realText(),
            'dificuldade' => fake()->numberBetween(1, 3)
        ];
    }
}
