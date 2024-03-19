<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orderDetails>
 */
class orderDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $j = 1;
        $z = 1;
        return [
            'order_id' => $j++,
            'product_id' => $z++,
            'quantity'=>fake()->numberBetween(1,10),
            'price'=>fake()->numberBetween(50,200)
        ];
    }
}
