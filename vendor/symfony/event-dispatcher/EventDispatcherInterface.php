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

use Symfony\Contracts\EventDispatcher\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * The EventDispatcherInterface is the central point of Symfony's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface EventDispatcherInterface extends ContractsEventDispatcherInterface
{
    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param int $priority The higher this value, the earlier an event
     *                      listener will be triggered in the chain (defaults to 0)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addListener(string $eventName, callable $listener, int $priority = 0): void;
=======
    public function addListener(string $eventName, callable $listener, int $priority = 0);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addListener(string $eventName, callable $listener, int $priority = 0);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Adds an event subscriber.
     *
     * The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addSubscriber(EventSubscriberInterface $subscriber): void;
=======
    public function addSubscriber(EventSubscriberInterface $subscriber);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addSubscriber(EventSubscriberInterface $subscriber);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Removes an event listener from the specified events.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function removeListener(string $eventName, callable $listener): void;

    public function removeSubscriber(EventSubscriberInterface $subscriber): void;
=======
    public function removeListener(string $eventName, callable $listener);

    public function removeSubscriber(EventSubscriberInterface $subscriber);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function removeListener(string $eventName, callable $listener);

    public function removeSubscriber(EventSubscriberInterface $subscriber);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Gets the listeners of a specific event or all listeners sorted by descending priority.
     *
     * @return array<callable[]|callable>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getListeners(?string $eventName = null): array;
=======
    public function getListeners(string $eventName = null): array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getListeners(string $eventName = null): array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Gets the listener priority for a specific event.
     *
     * Returns null if the event or the listener does not exist.
     */
    public function getListenerPriority(string $eventName, callable $listener): ?int;

    /**
     * Checks whether an event has any registered listeners.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function hasListeners(?string $eventName = null): bool;
=======
    public function hasListeners(string $eventName = null): bool;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function hasListeners(string $eventName = null): bool;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
