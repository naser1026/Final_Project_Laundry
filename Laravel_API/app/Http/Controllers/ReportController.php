<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function showReport()
    {
        $reports = Report::all();
        $todayOrders = Order::where(DB::raw('Date(created_at)'), Carbon::today())->get();

        $total_cash = 0;
        $total_non_cash = 0;
        $today_income = 0;
        $total_order = 0;
        $cancelled_order = 0;
        $total_non_paid = 0;

        if($todayOrders->count() > 0){
            foreach ($todayOrders as $order) {
                $today_income += $order['total_price'];
                $total_order += 1;
                if($order['order_status'] == 'canceled')
                {
                    $cancelled_order += 1;
                }
                if($order['payment_status'] == 'unpaid')
                {
                    $total_non_paid += 1;
                }
            }

        }
        if ($reports->count() > 0) {
            foreach ($reports as $report) {
                $total_cash += $report['cash_balance'];
                $total_non_cash += $report['non-cash_balance'];
            }
        }

        return response()->json([
            "data" => [
                'msg' => 'Laporan ditemukan',
                'data' => [
                    'total_cash' => $total_cash,
                    'total_non_cash' => $total_non_cash,
                    'today_income' => $today_income,
                    'total_order' => $total_order,
                    'cancelled_order' => $cancelled_order,
                    'total_non_paid' => $total_non_paid
                ]
            ]
        ]);
    }

}
