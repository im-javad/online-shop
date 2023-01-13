<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller{
    /**
     * Show home page
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view('index');
    }
}


