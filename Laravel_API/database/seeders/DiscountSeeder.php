<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::create([
            'discount_type' => 'percentage',
            'value' => 5,

        ]);

        Discount::create([
            'discount_type' => 'fixed',
            'value' => 5000,
        ]);
    }
}
