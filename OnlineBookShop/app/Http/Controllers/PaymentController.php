<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\Payment\PaymentService;
use App\Support\Payment\Requests\IDpayRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function pay(){
        
    }
}
