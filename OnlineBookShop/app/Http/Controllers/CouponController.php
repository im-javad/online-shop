<?php

namespace App\Http\Controllers;

use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use App\Support\Coupon\CouponValidator;

class CouponController extends Controller{
    /* Preparation */
    public function __construct(private CouponValidator $validatorCoupon){
        $this->middleware('auth');
    }
    
    /**
     * Apply discount code
     *
     * @param \App\Http\Requests\CouponRequestCouponRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storage(CouponRequest $request){
        $validator = $request->validated();

        $coupon = Coupon::where('code' , $validator['code'])->firstOrFail();

        try{
            $this->validatorCoupon->isValid($coupon);
        }catch(\Throwable $event){
            return 
                  back()->with('simpleErrorAlert' , $event->getMessage());
        }

        session()->put('coupon' , $coupon);

        return 
              back()->with('simpleSuccessAlert' , 'Your discount code has been successfully applied');
    }

    /**
     * Remove the discount code
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(){
        session()->forget('coupon');

        return 
              back()->with('simpleSuccessAlert' , 'Your discount code has been successfully removed');
    }
}

