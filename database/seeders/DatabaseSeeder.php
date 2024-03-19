<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Reviews;
use App\Models\Shippers;
use App\Models\User;
use App\Models\UserAddresses;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Categories::factory(10)->create();
       Shippers::factory(10)->create();
       Products::factory(10)->create();
       User::factory(10)->create();
       UserAddresses::factory(10)->create();
       Orders::factory(10)->create();
       OrderDetails::factory(10)->create();
       Reviews::factory(10)->create();


    }
}
