<?php

namespace Illuminate\Log;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->app->singleton('log', fn ($app) => new LogManager($app));
=======
        $this->app->singleton('log', function ($app) {
            return new LogManager($app);
        });
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->app->singleton('log', function ($app) {
            return new LogManager($app);
        });
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
