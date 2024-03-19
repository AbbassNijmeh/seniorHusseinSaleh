<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $i=1;
        return [
            'category_id'=>$i++,
            'name'=>fake()->name(),
            'price'=>fake()->numberBetween(50,200),
            'require_prescription'=>fake()->boolean(20),
            'discount'=>fake()->numberBetween(1,50),
            'description'=>fake()->sentence()
        ];
    }
}
