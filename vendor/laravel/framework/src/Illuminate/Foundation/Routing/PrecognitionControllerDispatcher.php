<?php

namespace Illuminate\Foundation\Routing;

use Illuminate\Routing\ControllerDispatcher;
use Illuminate\Routing\Route;
use RuntimeException;

class PrecognitionControllerDispatcher extends ControllerDispatcher
{
    /**
     * Dispatch a request to a given controller and method.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  mixed  $controller
     * @param  string  $method
     * @return void
     */
    public function dispatch(Route $route, $controller, $method)
    {
        $this->ensureMethodExists($controller, $method);

        $this->resolveParameters($route, $controller, $method);

<<<<<<< HEAD
<<<<<<< HEAD
        abort(204, headers: ['Precognition-Success' => 'true']);
=======
        abort(204);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        abort(204);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Ensure that the given method exists on the controller.
     *
     * @param  object  $controller
     * @param  string  $method
     * @return $this
     */
    protected function ensureMethodExists($controller, $method)
    {
        if (method_exists($controller, $method)) {
            return $this;
        }

        $class = $controller::class;

        throw new RuntimeException("Attempting to predict the outcome of the [{$class}::{$method}()] method but the method is not defined.");
    }
}
