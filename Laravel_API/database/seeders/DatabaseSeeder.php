<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           OwnerSeeder::class,
           OutletSeeder::class,
           ParfumSeeder::class,
           DurationSeeder::class,
           PackageSeeder::class,
           DiscountSeeder::class,
           CustumerSeeder::class,
           CashierSeeder::class,
           OrderSeeder::class
       ]);
    }
}
