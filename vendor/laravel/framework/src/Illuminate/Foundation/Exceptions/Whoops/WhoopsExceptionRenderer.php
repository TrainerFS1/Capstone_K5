<?php

namespace Illuminate\Foundation\Exceptions\Whoops;

use Illuminate\Contracts\Foundation\ExceptionRenderer;
<<<<<<< HEAD
<<<<<<< HEAD
use Whoops\Run as Whoops;

use function tap;
=======
use function tap;
use Whoops\Run as Whoops;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use function tap;
use Whoops\Run as Whoops;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class WhoopsExceptionRenderer implements ExceptionRenderer
{
    /**
     * Renders the given exception as HTML.
     *
     * @param  \Throwable  $throwable
     * @return string
     */
    public function render($throwable)
    {
        return tap(new Whoops, function ($whoops) {
            $whoops->appendHandler($this->whoopsHandler());

            $whoops->writeToOutput(false);

            $whoops->allowQuit(false);
        })->handleException($throwable);
    }

    /**
     * Get the Whoops handler for the application.
     *
     * @return \Whoops\Handler\Handler
     */
    protected function whoopsHandler()
    {
        return (new WhoopsHandler)->forDebug();
    }
}
