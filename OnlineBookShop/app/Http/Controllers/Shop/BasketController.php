<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Support\Basket\Basket;

class BasketController extends Controller{
    /* Preparation */
    private $basket;
    public function __construct(Basket $basket){
        $this->basket = $basket;
    }

    /**
     * Add a product to cart
     *
     * @param Product $product
     * @param integer $quantity
     * @return void
     */
    public function add(Product $product , int $quantity = 1){
        $this->basket->add($product , $quantity);

        return back();
    }
}
