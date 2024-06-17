<?php

namespace Illuminate\Foundation\Routing;

use Illuminate\Routing\CallableDispatcher;
use Illuminate\Routing\Route;

class PrecognitionCallableDispatcher extends CallableDispatcher
{
    /**
     * Dispatch a request to a given callable.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  callable  $callable
     * @return mixed
     */
    public function dispatch(Route $route, $callable)
    {
        $this->resolveParameters($route, $callable);

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
}
