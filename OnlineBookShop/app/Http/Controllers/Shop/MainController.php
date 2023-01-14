<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;

class MainController extends Controller{
    /**
     * Show home page
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $someItems = Product::take(12)->get();

        return view('index' , compact('someItems'));
    }
}


