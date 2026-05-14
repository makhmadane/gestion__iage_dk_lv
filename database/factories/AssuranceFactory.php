<?php

namespace Database\Factories;

use App\Models\TypeAssurance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assurance>
 */
class AssuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "libelle" => $this->faker->words(3, true),
            "montant" => $this->faker->randomDigit(),
            "bonus" => $this->faker->randomDigit(),
            "type_assurance_id" => TypeAssurance::factory(),
        ];
    }
}
