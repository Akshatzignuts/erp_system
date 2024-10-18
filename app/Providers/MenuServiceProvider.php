<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use Illuminate\Support\Facades\View;
class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // dd('hii');
       
            $menu = Menu::select('menu_name', 'url')
                        ->where('is_delete', 0)
                        ->where('status', 0)
                        ->get();
   
            View::share('menu', $menu);
        
    }
}
