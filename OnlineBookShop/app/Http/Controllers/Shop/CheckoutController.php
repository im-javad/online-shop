<?php

namespace App\Http\Controllers\Shop;

use App\Exceptions\InvalidCost;
use App\Http\Controllers\Controller;
use App\Services\Shop\Traits\HasCheckout;

class CheckoutController extends Controller{
    use HasCheckout;

    /**
     * Show checkout form 
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function checkoutForm(){
        try{
            $this->validationCost();
            return view('frontend.checkout');
        }catch(InvalidCost $event){
            return redirect()->route('shop.basket.index');
        }
    }    
}


