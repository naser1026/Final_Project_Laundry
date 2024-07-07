<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custumer;
use App\Models\Cashier;

class DashboardController extends Controller
{
    public function index()
    {
        $custumerCount = Custumer::count();
        $activeCashier = Cashier::find('status', 'active')->get('name');
        


    }
}
