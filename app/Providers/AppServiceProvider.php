<?php

namespace App\Providers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        //
=======
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }
}
