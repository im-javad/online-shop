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
        $products = null;

        $products = $this->preparingProducts($request);

        return view('shop' , compact('products'));
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        return view('single-product' , compact('product'));
    }
}

