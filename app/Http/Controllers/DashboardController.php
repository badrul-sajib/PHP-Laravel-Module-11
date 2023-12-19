<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard() {
        $totalAmount = DB::table('transactions')->whereDate('created_at',now())->sum('total_amount');
        $total_qty = DB::table('transactions')->whereDate('created_at',now())->sum('qty');
        $today = $totalAmount * $total_qty;

        $yesterdayAmount = DB::table('transactions')->whereDate('created_at', now()->subDay())->sum('total_amount');
        $yesterdayQty = DB::table('transactions')->whereDate('created_at', now()->subDay())->sum('qty');
        $yesterday = $yesterdayAmount * $yesterdayQty;

        $thisMonthAmount = DB::table('transactions')->whereMonth('created_at',now()->startOfMonth())->sum('total_amount');
        $thisMonthQty = DB::table('transactions')->whereMonth('created_at',now()->startOfMonth())->sum('qty');
        $thisMonth = $thisMonthAmount * $thisMonthQty;

        $lastMonthAmount = DB::table('transactions')->whereMonth('created_at', now()->subMonth()->startOfMonth())->sum('total_amount');
        $lastMonthQty = DB::table('transactions')->whereMonth('created_at', now()->subMonth()->startOfMonth())->sum('qty');
        $lastMonth = $lastMonthAmount * $lastMonthQty;

        return view('dashboard.index',compact('today','yesterday','thisMonth','lastMonth'));

        
    }
}
