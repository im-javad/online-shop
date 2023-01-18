<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show checkout form 
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function checkoutForm(){
        return view('checkout');
    }
}




