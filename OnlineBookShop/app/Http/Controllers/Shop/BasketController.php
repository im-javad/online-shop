<?php

namespace App\Http\Controllers\Shop;

use App\Exceptions\QuantityExceededException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\UpdateQuantityRequest;
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
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){
        $selectedProducts = $this->basket->selectedProducts();
        
        return view('frontend.cart' , compact('selectedProducts'));
    }

    /**
     * Add a product to basket
     *
     * @param \App\Models\Product $product
     * @param integer $quantity
     * @return \Illuminate\Http\RedirectResponse
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Product $product , int $quantity = 1){
        $this->basket->remove($product , $quantity);

        return back();
    }

    /**
     * Update product quantity in basket
     *
     * @param \App\Models\Product $product
     * @param \App\Http\Requests\Shop\UpdateQuantityRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateQuantity(Product $product , UpdateQuantityRequest $request){
        try{
            $validator = $request->validated();
            $this->basket->updateQuantity($product , $validator['new-quantity']);
            return back()->with('simpleSuccessAlert' , 'Quantity updated successfully');
        }catch(QuantityExceededException $event) {
            return back()->with('simpleWarningAlert' , $event->getMessage());
        }
    }

    /**
     * Clear the basket
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function clear(){
        $this->basket->clear();

        return redirect()->route('shop.basket.index')->with('simpleSuccessAlert' , 'Basket cleared successfully');
    }
}


