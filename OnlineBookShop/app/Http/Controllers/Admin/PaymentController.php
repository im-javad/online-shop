<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller{
    /**
     * Show the payments main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $payments = Payment::with('order')->paginate(10);

        return view('admin.frontend.payments' , compact('payments'));
    }
}


