<?php

namespace App\Providers;

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
        $this->app->bind(StorageInterface::class , function($all){
            return new SessionStorage('cart');
        });

        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
