<?php

namespace App\Providers;

use App\Support\Basket\Basket;
use App\Support\Cost\BasketCost;
use App\Support\Cost\Contract\CostInterface;
use App\Support\Cost\DiscountCost;
use App\Support\Cost\ShippingCost;
use App\Support\Coupon\DiscountManager;
use App\Support\Storage\Contract\StorageInterface;
use App\Support\Storage\SessionStorage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        $this->app->bind(StorageInterface::class , function($app){
            return new SessionStorage('cart');
        });

        $this->app->bind(CostInterface::class , function($app){
            $basketCost = new BasketCost($app->make(Basket::class));
            $shippingCost = new ShippingCost($basketCost);
            $discountCost = new DiscountCost($shippingCost , $app->make(DiscountManager::class));
            return $discountCost;
        });

        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}


