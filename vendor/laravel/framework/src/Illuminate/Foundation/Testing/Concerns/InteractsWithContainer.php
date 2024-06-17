<?php

namespace Illuminate\Foundation\Testing\Concerns;

use Closure;
use Illuminate\Foundation\Mix;
use Illuminate\Foundation\Vite;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Facade;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Illuminate\Support\HtmlString;
use Mockery;

trait InteractsWithContainer
{
    /**
     * The original Vite handler.
     *
     * @var \Illuminate\Foundation\Vite|null
     */
    protected $originalVite;

    /**
     * The original Laravel Mix handler.
     *
     * @var \Illuminate\Foundation\Mix|null
     */
    protected $originalMix;

    /**
     * Register an instance of an object in the container.
     *
     * @param  string  $abstract
     * @param  object  $instance
     * @return object
     */
    protected function swap($abstract, $instance)
    {
        return $this->instance($abstract, $instance);
    }

    /**
     * Register an instance of an object in the container.
     *
     * @param  string  $abstract
     * @param  object  $instance
     * @return object
     */
    protected function instance($abstract, $instance)
    {
        $this->app->instance($abstract, $instance);

        return $instance;
    }

    /**
     * Mock an instance of an object in the container.
     *
     * @param  string  $abstract
     * @param  \Closure|null  $mock
     * @return \Mockery\MockInterface
     */
    protected function mock($abstract, Closure $mock = null)
    {
        return $this->instance($abstract, Mockery::mock(...array_filter(func_get_args())));
    }

    /**
     * Mock a partial instance of an object in the container.
     *
     * @param  string  $abstract
     * @param  \Closure|null  $mock
     * @return \Mockery\MockInterface
     */
    protected function partialMock($abstract, Closure $mock = null)
    {
        return $this->instance($abstract, Mockery::mock(...array_filter(func_get_args()))->makePartial());
    }

    /**
     * Spy an instance of an object in the container.
     *
     * @param  string  $abstract
     * @param  \Closure|null  $mock
     * @return \Mockery\MockInterface
     */
    protected function spy($abstract, Closure $mock = null)
    {
        return $this->instance($abstract, Mockery::spy(...array_filter(func_get_args())));
    }

    /**
     * Instruct the container to forget a previously mocked / spied instance of an object.
     *
     * @param  string  $abstract
     * @return $this
     */
    protected function forgetMock($abstract)
    {
        $this->app->forgetInstance($abstract);

        return $this;
    }

    /**
     * Register an empty handler for Vite in the container.
     *
     * @return $this
     */
    protected function withoutVite()
    {
        if ($this->originalVite == null) {
            $this->originalVite = app(Vite::class);
        }

<<<<<<< HEAD
<<<<<<< HEAD
        Facade::clearResolvedInstance(Vite::class);

        $this->swap(Vite::class, new class extends Vite
        {
            public function __invoke($entrypoints, $buildDirectory = null)
            {
                return new HtmlString('');
            }

            public function __call($method, $parameters)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->swap(Vite::class, new class
        {
            public function __invoke()
            {
                return '';
            }

            public function __call($name, $arguments)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return '';
            }

            public function __toString()
            {
                return '';
            }

<<<<<<< HEAD
<<<<<<< HEAD
            public function useIntegrityKey($key)
=======
            public function useIntegrityKey()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            public function useIntegrityKey()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return $this;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            public function useBuildDirectory($path)
=======
            public function useBuildDirectory()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            public function useBuildDirectory()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return $this;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            public function useHotFile($path)
=======
            public function useHotFile()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            public function useHotFile()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return $this;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            public function withEntryPoints($entryPoints)
=======
            public function withEntryPoints()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            public function withEntryPoints()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return $this;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            public function useScriptTagAttributes($attributes)
=======
            public function useScriptTagAttributes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            public function useScriptTagAttributes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return $this;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            public function useStyleTagAttributes($attributes)
            {
                return $this;
            }

            public function usePreloadTagAttributes($attributes)
=======
            public function useStyleTagAttributes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            public function useStyleTagAttributes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            {
                return $this;
            }

            public function preloadedAssets()
            {
                return [];
            }
<<<<<<< HEAD
<<<<<<< HEAD

            public function reactRefresh()
            {
                return '';
            }

            public function content($asset, $buildDirectory = null)
            {
                return '';
            }

            public function asset($asset, $buildDirectory = null)
            {
                return '';
            }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        });

        return $this;
    }

    /**
     * Restore Vite in the container.
     *
     * @return $this
     */
    protected function withVite()
    {
        if ($this->originalVite) {
            $this->app->instance(Vite::class, $this->originalVite);
        }

        return $this;
    }

    /**
     * Register an empty handler for Laravel Mix in the container.
     *
     * @return $this
     */
    protected function withoutMix()
    {
        if ($this->originalMix == null) {
            $this->originalMix = app(Mix::class);
        }

        $this->swap(Mix::class, function () {
            return new HtmlString('');
        });

        return $this;
    }

    /**
     * Restore Laravel Mix in the container.
     *
     * @return $this
     */
    protected function withMix()
    {
        if ($this->originalMix) {
            $this->app->instance(Mix::class, $this->originalMix);
        }

        return $this;
    }
}
