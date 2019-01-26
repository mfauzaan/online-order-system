<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Customer;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query Required Datasets for Dashboard
        $orders = Order::orderBy('id', 'desc')->limit(15)->with('item')->get();
        $customers = Customer::orderBy('id', 'desc')->limit(15)->get();
        $customers_count = Customer::count();
        $orders_count = Order::count();
        $total_sales = Order::sum('total_price');

        return view('merchant.dashboard.index', compact('orders', 'customers', 'customers_count', 'orders_count', 'total_sales'));
    }
}
