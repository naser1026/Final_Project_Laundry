<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_id_package = [1,2,3];
        $list_count = [1,2,1];
        $id_parfum = 1;
        $invoice = "INV-".rand(100000, 999999);
        // $created_by = "Owner";
        $id_customer = 1;
        // $order_status = "on process";
        // $payment_status = "unpaid";
        // $payment_type = "cash";
        $total_price = 100000;

        Order::create([
            'invoice' => $invoice,
            'list_id_package' => implode(",",$list_id_package),
            'list_count' => implode(",",$list_count),
            'id_parfum' => $id_parfum,
            'id_customer' => $id_customer,
            // 'order_status' => $order_status,
            // 'created_by' => $created_by,
            // 'payment_status' => $payment_status,
            // 'payment_type' => $payment_type,
            'total_price' => $total_price
        ]);

    }
}
