<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beds'=>fake()->numberBetween(1,41),
            'baths'=>fake()->numberBetween(1,41),
            'area'=>fake()->numberBetween(1,41),
            'code'=>fake()->postcode(),
            'street'=>fake()->streetName(),
            'street_nr'=>fake()->streetAddress(),
            'price'=>fake()->numberBetween(20_000,100_000),
        ];
    }
}
