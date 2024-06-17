<?php

namespace Illuminate\Foundation\Testing;

use Faker\Factory;
use Faker\Generator;

trait WithFaker
{
    /**
     * The Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Setup up the Faker instance.
     *
     * @return void
     */
    protected function setUpFaker()
    {
        $this->faker = $this->makeFaker();
    }

    /**
     * Get the default Faker instance for a given locale.
     *
     * @param  string|null  $locale
     * @return \Faker\Generator
     */
    protected function faker($locale = null)
    {
        return is_null($locale) ? $this->faker : $this->makeFaker($locale);
    }

    /**
     * Create a Faker instance for the given locale.
     *
     * @param  string|null  $locale
     * @return \Faker\Generator
     */
    protected function makeFaker($locale = null)
    {
<<<<<<< HEAD
        if (isset($this->app)) {
            $locale ??= $this->app->make('config')->get('app.faker_locale', Factory::DEFAULT_LOCALE);

            if ($this->app->bound(Generator::class)) {
                return $this->app->make(Generator::class, ['locale' => $locale]);
            }
        }

        return Factory::create($locale ?? Factory::DEFAULT_LOCALE);
=======
        $locale ??= config('app.faker_locale', Factory::DEFAULT_LOCALE);

        if (isset($this->app) && $this->app->bound(Generator::class)) {
            return $this->app->make(Generator::class, ['locale' => $locale]);
        }

        return Factory::create($locale);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
