<?php

namespace Database\Seeders;

use App\Models\Duration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Reguler', 'Expres', 'Kilat'];
        $values = [72, 24, 6];

        for($i = 0; $i < count($names); $i++) {
            Duration::create([
                'name' => $names[$i],
                'value' => $values[$i],
            ]);
        }
    }
}
