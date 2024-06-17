<?php

namespace Illuminate\Pipeline;

use Illuminate\Contracts\Pipeline\Hub as PipelineHubContract;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PipelineServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
<<<<<<< HEAD
<<<<<<< HEAD
            PipelineHubContract::class,
            Hub::class
        );

        $this->app->bind('pipeline', fn ($app) => new Pipeline($app));
=======
            PipelineHubContract::class, Hub::class
        );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            PipelineHubContract::class, Hub::class
        );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            PipelineHubContract::class,
<<<<<<< HEAD
<<<<<<< HEAD
            'pipeline',
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];
    }
}
