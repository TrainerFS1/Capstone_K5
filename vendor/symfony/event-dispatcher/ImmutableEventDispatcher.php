<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\EventDispatcher;

/**
 * A read-only proxy for an event dispatcher.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImmutableEventDispatcher implements EventDispatcherInterface
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private EventDispatcherInterface $dispatcher,
    ) {
    }

    public function dispatch(object $event, ?string $eventName = null): object
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private EventDispatcherInterface $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(object $event, string $eventName = null): object
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->dispatcher->dispatch($event, $eventName);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function addListener(string $eventName, callable|array $listener, int $priority = 0): never
=======
    public function addListener(string $eventName, callable|array $listener, int $priority = 0)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addListener(string $eventName, callable|array $listener, int $priority = 0)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function addSubscriber(EventSubscriberInterface $subscriber): never
=======
    public function addSubscriber(EventSubscriberInterface $subscriber)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addSubscriber(EventSubscriberInterface $subscriber)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function removeListener(string $eventName, callable|array $listener): never
=======
    public function removeListener(string $eventName, callable|array $listener)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function removeListener(string $eventName, callable|array $listener)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function removeSubscriber(EventSubscriberInterface $subscriber): never
=======
    public function removeSubscriber(EventSubscriberInterface $subscriber)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function removeSubscriber(EventSubscriberInterface $subscriber)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        throw new \BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getListeners(?string $eventName = null): array
=======
    public function getListeners(string $eventName = null): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getListeners(string $eventName = null): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->dispatcher->getListeners($eventName);
    }

    public function getListenerPriority(string $eventName, callable|array $listener): ?int
    {
        return $this->dispatcher->getListenerPriority($eventName, $listener);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function hasListeners(?string $eventName = null): bool
=======
    public function hasListeners(string $eventName = null): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function hasListeners(string $eventName = null): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->dispatcher->hasListeners($eventName);
    }
}
