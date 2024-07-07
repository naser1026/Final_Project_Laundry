<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parfum;

class ParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parfums = [
            'Aksia',
            'Junjung Buih',
            'Lavender',
            'Ocean',
            'Sakura'
        ];

        foreach ($parfums as $parfum) {
            Parfum::create([
                'name' => $parfum,
            ]);
        }
    }
}
