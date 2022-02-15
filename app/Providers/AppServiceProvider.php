<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Schema;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Blade::directive('isSeletiva', function () {
            $isAuth = false;
            // check if the user authenticated is seletiva
            if (auth()->user() && auth()->user()->capability == 3) {
                $isAuth = true;
            }
            return "<?php if ($isAuth) { ?>";
        });
        Blade::directive('endisSeletiva', function () {
            return "<?php } ?>";
        });*/
    }
}
