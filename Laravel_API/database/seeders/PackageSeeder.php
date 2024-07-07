<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Bed Cover Double',
            'Bed Cover Double',
            'Bed Cover Jumbo',
            'Bed Cover Jumbo',
            'Bed Cover Single',
            'Bed Cover Single',
            'Boneka Besar',
            'Boneka Kecil',
            'Boneka Sedang',
            'Cuci Lipat',
            'Cuci Lipat',
            'Cuci Lipat',
            'Cuci Setrika',
            'Cuci Setrika',
            'Cuci Setrika',
            'Karpet',
            'Selimut Double',
            'Selimut Double',
            'Selimut Double',
            'Selimut Single',
            'Selimut Single',
            'Selimut Single',
            'Setrika',
            'Setrika',
            'Setrika',
            'Sprei Double',
            'Sprei Double',
            'Sprei Double',
            'Sprei Single',
            'Sprei Single',
            'Sprei Single'
        ];

        $package_types = [
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Kiloan',
            'Kiloan',
            'Kiloan',
            'Kiloan',
            'Kiloan',
            'Kiloan',
            'Meteran',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Kiloan',
            'Kiloan',
            'Kiloan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
            'Satuan',
        ];

        $prices = [
            20000,
            25000,
            30000,
            35000,
            40000,
            45000,
            50000,
            55000,
            60000,
            10000,
            15000,
            20000,
            25000,
            30000,
            35000,
            10000,
            20000,
            25000,
            30000,
            10000,
            15000,
            20000,
            10000,
            15000,
            20000,
            10000,
            15000,
            20000,
            10000,
            15000,
            20000,
        ];

        $durations = [1,2,1,2,1,2,1,1,1,1,2,3,1,2,3,1,1,2,1,1,2,3,1,2,3,1,2,3,1,2,3];

        for ($i = 0; $i < count($names); $i++) {
            Package::create([
                'name' => $names[$i],
                'package_type' => $package_types[$i],
                'price' => $prices[$i],
                'id_duration' => $durations[$i],
            ]);
        }
    }
}
