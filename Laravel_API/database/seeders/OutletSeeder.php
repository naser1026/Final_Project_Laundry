<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outlet::create([
            'name' => 'Outlet 1',
            'address' => 'Jl. ABC No. 123',
            'phone_number' => '081234567890',
            'id_owner' => 1
        ]);
    }
}
