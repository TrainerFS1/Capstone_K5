<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Stopwatch\Stopwatch;
use Symfony\Component\Stopwatch\StopwatchEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TimeDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private ?KernelInterface $kernel;
    private ?Stopwatch $stopwatch;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(?KernelInterface $kernel = null, ?Stopwatch $stopwatch = null)
    {
        $this->kernel = $kernel;
        $this->stopwatch = $stopwatch;
        $this->data = ['events' => [], 'stopwatch_installed' => false, 'start_time' => 0];
    }

    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(KernelInterface $kernel = null, Stopwatch $stopwatch = null)
    {
        $this->kernel = $kernel;
        $this->stopwatch = $stopwatch;
    }

    public function collect(Request $request, Response $response, \Throwable $exception = null)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (null !== $this->kernel) {
            $startTime = $this->kernel->getStartTime();
        } else {
            $startTime = $request->server->get('REQUEST_TIME_FLOAT');
        }

        $this->data = [
            'token' => $request->attributes->get('_stopwatch_token'),
            'start_time' => $startTime * 1000,
            'events' => [],
            'stopwatch_installed' => class_exists(Stopwatch::class, false),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function reset(): void
    {
        $this->data = ['events' => [], 'stopwatch_installed' => false, 'start_time' => 0];
=======
    public function reset()
    {
        $this->data = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function reset()
    {
        $this->data = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $this->stopwatch?->reset();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function lateCollect(): void
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (null !== $this->stopwatch && isset($this->data['token'])) {
            $this->setEvents($this->stopwatch->getSectionEvents($this->data['token']));
        }
        unset($this->data['token']);
    }

    /**
     * @param StopwatchEvent[] $events The request events
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function setEvents(array $events): void
=======
    public function setEvents(array $events)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setEvents(array $events)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        foreach ($events as $event) {
            $event->ensureStopped();
        }

        $this->data['events'] = $events;
    }

    /**
     * @return StopwatchEvent[]
     */
    public function getEvents(): array
    {
        return $this->data['events'];
    }

    /**
     * Gets the request elapsed time.
     */
    public function getDuration(): float
    {
        if (!isset($this->data['events']['__section__'])) {
            return 0;
        }

        $lastEvent = $this->data['events']['__section__'];

        return $lastEvent->getOrigin() + $lastEvent->getDuration() - $this->getStartTime();
    }

    /**
     * Gets the initialization time.
     *
     * This is the time spent until the beginning of the request handling.
     */
    public function getInitTime(): float
    {
        if (!isset($this->data['events']['__section__'])) {
            return 0;
        }

        return $this->data['events']['__section__']->getOrigin() - $this->getStartTime();
    }

    public function getStartTime(): float
    {
        return $this->data['start_time'];
    }

    public function isStopwatchInstalled(): bool
    {
        return $this->data['stopwatch_installed'];
    }

    public function getName(): string
    {
        return 'time';
    }
}
