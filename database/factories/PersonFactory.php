<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake() -> firstName(),
            'lastName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> date(),
            'heigth' => fake() -> boolean() ? fake() -> numberBetween(50, 300) : '',
        ];
    }
}
