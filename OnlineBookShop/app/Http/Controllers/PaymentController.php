<?php

namespace App\Http\Controllers;

use App\Http\Requests\Payment\PayRequest;
use App\Models\Order;
use App\Support\Payment\PaymentService;
use App\Support\Payment\Traits\HasPayment;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller{
    /** Preparation **/
    use HasPayment;
    public function __construct(private Transaction $transaction){
        $this->middleware('auth');
    }
    
    /**
     * Paying the order in different ways
     *
     * @param \App\Http\Requests\Payment\PayRequest $request
     * @return mixed
     */
    public function pay(PayRequest $request){
        try{
            $validator = $request->validated();

            $gatewayName = $validator['gateway'];

            $result = $this->transaction->doPaymentOperation($validator); 

            if($result['payment']->method === 'online'){
                $gatewayRequest = $this->preparationGatewayRequest($gatewayName , $result);
                $paymentService = new PaymentService($gatewayName , $gatewayRequest);
                return $paymentService->pay();
            }else{
                $this->transaction->completeOrder($result['order']);
                return $this->successResponse();
            }
        }catch(\Exception $event){
            return $this->errorResponse();
        }   
    }

    /**
     * Return payment details to verify payment
     *
     * @param string $gatewayName
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function callback(string $gatewayName , Request $request){
        try{
            $gatewayRequest = $this->preparationGatewayRequest($gatewayName.'Verify' , $request);

            $paymentService = new PaymentService($gatewayName , $gatewayRequest);
            
            $verifyResult = $paymentService->verify();

            if(!$verifyResult['status'])
                return $this->verificationFailureResponse();

            if($verifyResult['status'] === true && $verifyResult['statusCode'] === 100){ #(if is option)->For more security, a bet has been made and you can remove this
                $result = $verifyResult['content'];
                $order = Order::where('res_num', $result['order_id'])->first();
                $this->successVerification($order , $gatewayName , $result);
                return $this->successResponse();
            }
        }catch(\Exception $event){
            return $this->errorResponse();
        }
    } 
} 


