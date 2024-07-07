<?php

namespace App\Http\Controllers;

use App\Models\Custumer;
use App\Models\Discount;
use App\Models\Duration;
use App\Models\Mutation;
use App\Models\Order;
use App\Models\Package;
use App\Models\Parfum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use LaravelLang\Development\Processors\Packages;
use Termwind\Components\Raw;

class OrderController extends Controller
{
    public function showAllOrder()
    {
        $orders = Order::all();

        if ($orders->count() <= 0) {
            return response()->json([
                'msg' =>  'Pesanan tidak ditemukan'
            ], 404);
        }

        return response()->json([
            "data" => [
                'msg' => 'Pesanan ditemukan',
                'orders' => $orders
            ]
        ], 200);
    }


    public function showOrderByTarget($target, $targetValue)
    {
        $orders = Order::where($target, $targetValue)->get();
        if (!$orders) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'msg' => 'Pesanan ditemukan',
            'orders' => $orders
        ], 200);
    }


    public function addOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'list_id_package' => 'required',
            'list_count' => 'required',
            'id_parfum' => 'required|exists:parfums,id',
            'id_customer' => 'required|exists:custumers,id',
            'id_discount' => 'nullable|exists:discounts,id',
            'total_price' => 'required|numeric|min:0',
            'information' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $validated = $validator->validated();
        while(true) {
            $invoice = "INV-".rand(100000, 999999);
            if(!Order::where('invoice', $invoice)->exists()){
                break;
            }
        }

        $order = Order::create([
            'invoice' => $invoice,
            'list_id_package' => $validated['list_id_package'],
            'list_count' => $validated['list_count'],
            'id_parfum' => $validated['id_parfum'],
            'id_customer' => $validated['id_customer'],
            'id_discount' => $validated['id_discount'],
            'total_price' => $validated['total_price'],
            'information' => $validated['information'],
        ]);

        return response()->json([
            "data" => [
                'msg' => 'Pesanan berhasil ditambahkan',
                'order' => $order
            ]
        ], 200);
    }


    public function updateOrder(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'list_id_package' => 'required',
            'list_count' => 'required',
            'id_parfum' => 'required|exists:parfums,id',
            'id_customer' => 'required|exists:custumers,id',
            'order_status' => 'required|in:on process,ready,canceled',
            'created_by' => 'required',
            'payment_status' => 'required|in:paid,unpaid',
            'payment_type' => 'required|in:cash,transfer',
            'id_discount' => 'nullable|exists:discounts,id',
            'total_price' => 'required|numeric|min:0',
            'information' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $validated = $validator->validated();
        $order->update([
            'list_id_package' => $validated['list_id_package'],
            'list_count' => $validated['list_count'],
            'id_parfum' => $validated['id_parfum'],
            'id_customer' => $validated['id_customer'],
            'order_status' => $validated['order_status'],
            'created_by' => $validated['created_by'],
            'payment_status' => $validated['payment_status'],
            'payment_type' => $validated['payment_type'],
            'id_discount' => $validated['id_discount'],
            'total_price' => $validated['total_price'],
            'information' => $validated['information'],
        ]);

        return response()->json([
            "data" => [
                'msg' => 'Pesanan berhasil diperbarui',
                'order' => $order
            ]
        ], 200);
    }

    public function changeOrderStatus(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'order_status' => 'required|in:on process,ready,canceled',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $validated = $validator->validated();
        $order->update([
            'order_status' => $validated['order_status'],
        ]);
        return response()->json([
            "data" => [
                'msg' => 'Pesanan berhasil diperbarui',
                'order' => $order
            ]
        ], 200);
    }

    public function changePaymentStatus($payment_type,$id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }

        if($order['payment_status'] == "Lunas")
        {
            return response()->json([
                    'msg' =>  'Pesanan sudah lunas'
            ], );
        }


        $order->update([
            'payment_status' => "Lunas",
            'payment_type' => $payment_type
        ]);


        $orderDate = Carbon::parse($order['created_at'])->format('Y-m-d');
        $report = Report::where(DB::raw('Date(created_at)'), $orderDate)->first();
        if($order['payment_type'] == 'Tunai')
        {
            if(!$report){
                Report::create([
                    'cash_balance' => $order['total_price'],
                    'non-cash_balance' => 0
                ]);
            }else {
                $report->update([
                    'cash_balance' => $report['cash_balance'] + $order['total_price'],
                    'non-cash_balance' => $report['non-cash_balance']
                ]);
            }
        }else {
            if(!$report){
                Report::create([
                    'cash_balance' => 0,
                    'non-cash_balance' => $order['total_price']
                ]);
            }else {
                $report->update([
                    'cash_balance' => $report['cash_balance'],
                    'non-cash_balance' => $report['non-cash_balance'] + $order['total_price']
                ]);
            }
        }

        Mutation::create([
            'mutation_type' => 'in',
            'payment_type' => $order['payment_type'],
            'cash_flow' => $order['total_price'],
        ]);


        return response()->json([
            "data" => [
                'msg' => 'Pesanan berhasil diperbarui',
                'order' => $order
            ]
        ], 200);
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }
        $order->delete();
        return response()->json([
            "data" => [
                'msg' => 'Pesanan berhasil dihapus'
            ]
        ], 200);
    }

    public function showOrderById($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'msg' => 'Pesanan ditemukan',
            'order' => $order
        ], 200);
    }

    public function showOrderDetail($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'msg' => 'Pesanan tidak ditemukan'
            ], 404);
        }


        $list_package = [];
        $packages = explode(",",$order['list_id_package'] );
        $counts = explode(",", $order['list_count']);
        $i = 0;

        foreach ($packages as $id_package) {
            $package = Package::find($id_package);
            if($package['package_type'] == "Satuan") {
                $package['package_type'] = "pcs";
            }elseif ($package['package_type'] == "Kiloan") {
                $package['package_type'] = "kg";
            }else {
                $package['package_type'] = "m";
            }
            $package['count'] = (int)$counts[$i];
            $duration = Duration::find($package['id_duration']);

            $list_package[] = [
                "id" => $package['id'],
                "name" => $package['name'],
                "package_type" => $package['package_type'],
                "duration" => [
                    "name" => $duration['name'],
                    "value" => $duration['value']
                ],
                "count" => (float)$counts[$i],
                "price" => $package['price']*(float)$counts[$i],

            ];
            $i++;

        }
        $customer = Custumer::find($order['id_customer']);
        $parfum = Parfum::find($order['id_parfum']);


        if($order['id_discount'] != null) {
            $discount = Discount::find($order['id_discount']);
            if ($discount['discount_type'] == 'fixed') {
                $discount = $discount['value'];
            }else {
                $discount = $discount['value'] * $order['total_price'] / 100;
            }

        }else {
            $discount = 0;
        }

        $data = [
            "invoice" => $order['invoice'],
            "packages" => $list_package,
            "customer" => [
                "id" => $customer['id'],
                "name" => $customer['name'],
                "phone_number" => $customer['phone_number']
            ],
            "parfum" => $parfum['name'],
            "order_status" => $order['order_status'],
            "discount" => $discount,
            "payment_status" => $order['payment_status'],
            "payment_type" => $order['payment_type'],
            "total_service" => $order['total_price'],
            "total_price" => $order['total_price'] - $discount,
            "information" => $order['information']



        ];

        return response()->json([
            "data" => [
                'msg' => 'Pesanan ditemukan',
                'orders' => $data
            ]
        ]);
    }
}

