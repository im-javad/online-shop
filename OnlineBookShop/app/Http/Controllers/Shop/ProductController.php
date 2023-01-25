<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Shop\Traits\HasProduc as ShopHasProduct;
use Illuminate\Http\Request;

class ProductController extends Controller{
    use ShopHasProduct;
    /**
     * Display all of the products
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){ 
        $all = $this->organizeProductsByCategory($request);

        return view('frontend.shop' , compact('all'));
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        return view('frontend.single-product' , compact('product'));
    }
}

