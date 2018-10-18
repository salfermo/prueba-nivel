<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Custom\Proveedores;

class PNServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SmtpProvider::class, function ($app) {
            return new SmtpProvider();
        });

        $this->app->bind(SesProvider::class, function ($app) {
            return new SesProvider();
        });
    }
}
