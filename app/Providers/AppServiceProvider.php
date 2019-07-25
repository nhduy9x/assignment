<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('layout_home.layout.header-bottom',function($view){
            $menus=ProductCategory::all();
            $view->with('menus',$menus);
        });
       
    }
}
