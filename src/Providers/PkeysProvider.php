<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 29/07/17
 * Time: 21:44
 */

namespace LaravelPkeys;

use Illuminate\Support\ServiceProvider;
use Pkeys\Pkey;

class PkeysProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        /*
         * Register a Pkey instance with the schema loaded from config
         */
        $this->app->singleton(Pkey::class, function ($app) {
            return new Pkey(config('pkeys'));
        });


        /*
         * Regiser the facade alias
         */
        $this->app->alias(Pkey::class, 'pkey');
    }
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/pkeys.php' => config_path('pkeys.php'),
        ]);
    }
}