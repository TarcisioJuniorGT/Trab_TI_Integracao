<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FoodPayment;


class FoodPaymentSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            FoodPayment::create([
                'purchase_id' => fake()->numberBetween(1, 10),
                'value' => fake()->numberBetween(1, 1000)
            ]);
        }
    }
}
