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
        $orders = Order::orderBy('id', 'desc')->limit(10)->with('item')->get();
        $customers = Customer::orderBy('id', 'desc')->limit(10)->get();

        return view('merchant.dashboard.index', compact('orders', 'customers'));
    }
}
