<?php

namespace App\Providers;

use App\Http\Repositories\Contracts\MainPageRepositoryInterface;
use App\Http\Repositories\MainPageRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public $bindings = [
        MainPageRepositoryInterface::class => MainPageRepository::class,
        ];

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
        //
    }
}
