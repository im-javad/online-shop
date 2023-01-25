<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller{
    /**
     * Show the orders main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $orders = Order::with('user')->paginate(10);
        
        return view('admin.frontend.orders' , compact('orders'));
    }
}


