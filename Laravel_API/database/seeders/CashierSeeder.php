<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cashier;

class CashierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 9) as $i) {
            Cashier::create([
                'name' => 'Cashier ' . $i,
                'id_cashier' => 'NAM-' . '10000'.$i
            ]);
        }
    }
}
