<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'  => fake()->name(),
            'contact_email' => fake()->email(),
            'contact_phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'city'  => fake()->city(),
            'country' => fake()->country(),
            'additional_info' => fake()->text(),
        ];
    }
}
