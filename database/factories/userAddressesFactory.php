<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\userAddresses>
 */
class userAddressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $i = 1;
        return [
            'user_id'=>$i++,
            'country'=>fake()->country(),
            'city'=>fake()->city(),
            'street'=>fake()->streetAddress(),
            'building'=>fake()->buildingNumber()
        ];
    }
}
