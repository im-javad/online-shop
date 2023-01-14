<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller{
    /**
     * Display all of the products
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = Product::all();
        
        return view('shop' , compact('products'));
    }

    /**
     * Display the specified product.
     *
     * @param  App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        return view('single-product' , compact('product'));
    }
}
