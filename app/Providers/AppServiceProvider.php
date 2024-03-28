<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Livewire\Livewire;

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
        Paginator::defaultView('layouts.pagination-links');
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/library/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/library/livewire/livewire.js', $handle);
        });
    }
}
