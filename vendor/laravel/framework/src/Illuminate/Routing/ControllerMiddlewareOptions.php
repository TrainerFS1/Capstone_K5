<?php

namespace Illuminate\Routing;

class ControllerMiddlewareOptions
{
    /**
     * The middleware options.
     *
     * @var array
     */
    protected $options;

    /**
     * Create a new middleware option instance.
     *
     * @param  array  $options
     * @return void
     */
    public function __construct(array &$options)
    {
        $this->options = &$options;
    }

    /**
     * Set the controller methods the middleware should apply to.
     *
<<<<<<< HEAD
     * @param  array|string|mixed  $methods
=======
     * @param  array|string|dynamic  $methods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return $this
     */
    public function only($methods)
    {
        $this->options['only'] = is_array($methods) ? $methods : func_get_args();

        return $this;
    }

    /**
     * Set the controller methods the middleware should exclude.
     *
<<<<<<< HEAD
     * @param  array|string|mixed  $methods
=======
     * @param  array|string|dynamic  $methods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return $this
     */
    public function except($methods)
    {
        $this->options['except'] = is_array($methods) ? $methods : func_get_args();

        return $this;
    }
}
