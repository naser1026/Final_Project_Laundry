<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Custumer;

class CustumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Custumer::create([
            'name' => 'Naser Setiawan',
            'phone_number' => '081234567890',
            'created_by' => 1
        ]);
    }
}
