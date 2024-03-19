<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orders>
 */
class ordersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $i=1;
        $j=1;
        $z=1;
        return [
            'user_address_id'=>fake()->increment,
            'user_id'=>$j++,
            'shipper_id'=>$z++,
            'status'=>fake()->randomElement(['pending','shipped']),
            'total_price'=>fake()->randomNumber(4),
        ];
    }
}
