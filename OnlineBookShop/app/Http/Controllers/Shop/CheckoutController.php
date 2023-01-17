<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller{
    /**
     * Show checkout form 
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function checkoutForm(){
        return view('checkout');
    }
}




