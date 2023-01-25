<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Services\shop\OwnerValues;

class MainController extends Controller{
    /**
     * Show home page
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $popularCategories = ['War' , 'Historical' , 'Business']; //! The popular categories are chosen by the site admin (Treatment of interests and desires)
        
        $all = OwnerValues::geCategoriesWithProducts();

        return view('frontend.index' , compact('popularCategories' , 'all'));
    }
}


