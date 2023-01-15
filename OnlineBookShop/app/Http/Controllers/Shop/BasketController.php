<?php

namespace App\Http\Controllers\Shop;

use App\Exceptions\QuantityExceededException;
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
     * Show the basket(cart) page 
     *
     * @return void
     */
    public function index(){
        $selectedProducts = $this->basket->selectedProducts();
        
        return view('cart' , compact('selectedProducts'));
    }

    /**
     * Add a product to basket
     *
     * @param \App\Models\Product $product
     * @param integer $quantity
     * @return void
     */
    public function add(Product $product , int $quantity = 1){
        try{
            $this->basket->add($product , $quantity);
            return back();
        }catch(QuantityExceededException $event) {
            return back()->with('simpleWarningAlert' , $event->getMessage());
        }
    }

    /**
     * Remove a product from basket
     *
     * @param \App\Models\Product $product
     * @param integer $quantity
     * @return void
     */
    public function remove(Product $product , int $quantity = 1){
        $this->basket->remove($product , $quantity);

        return back();
    }

    /**
     * Clear the basket
     *
     * @return void
     */
    public function clear(){
        $this->basket->clear();

        return redirect()->route('shop.products.index')->with('simpleSuccessAlert' , 'Basket cleared successfully');
    }
}

