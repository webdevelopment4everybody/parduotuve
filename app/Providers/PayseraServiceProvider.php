<?php

namespace App\Providers;
use App\Services\PayseraService;
use Illuminate\Support\ServiceProvider;

class PayseraServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PayseraService::class, function ($app) {
            $paysera = new PayseraService([
            'projectid'     =>181631,
            'sign_password' =>'300bedd5a8a0b2f1c4bf26d3cd69cc9b']
        ); 
            return $paysera;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
