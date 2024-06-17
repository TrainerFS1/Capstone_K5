<?php

namespace Illuminate\Console\Concerns;

use Illuminate\Console\Signals;
use Illuminate\Support\Arr;

trait InteractsWithSignals
{
    /**
     * The signal registrar instance.
     *
     * @var \Illuminate\Console\Signals|null
     */
    protected $signals;

    /**
     * Define a callback to be run when the given signal(s) occurs.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @template TSignals of iterable<array-key, int>|int
     *
     * @param  (\Closure():(TSignals))|TSignals  $signals
=======
     * @param  iterable<array-key, int>|int  $signals
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param  iterable<array-key, int>|int  $signals
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param  callable(int $signal): void  $callback
     * @return void
     */
    public function trap($signals, $callback)
    {
        Signals::whenAvailable(function () use ($signals, $callback) {
            $this->signals ??= new Signals(
                $this->getApplication()->getSignalRegistry(),
            );

<<<<<<< HEAD
<<<<<<< HEAD
            collect(Arr::wrap(value($signals)))
=======
            collect(Arr::wrap($signals))
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            collect(Arr::wrap($signals))
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                ->each(fn ($signal) => $this->signals->register($signal, $callback));
        });
    }

    /**
     * Untrap signal handlers set within the command's handler.
     *
     * @return void
     *
     * @internal
     */
    public function untrap()
    {
        if (! is_null($this->signals)) {
            $this->signals->unregister();

            $this->signals = null;
        }
    }
}
