<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\shop\OwnerValues;

class MainController extends Controller{
    /**
     * Show home page
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $popularCategories = ['War' , 'Historical' , 'Psychology']; //! The popular categories are chosen by the site admin (Treatment of interests and desires)
        
        $all = OwnerValues::geCategoriesWithProducts();

        $discountedBooks = Product::whereNotNull('percent_discount')->get();

        return view('frontend.index' , compact('popularCategories' , 'all' , 'discountedBooks'));
    }
}


