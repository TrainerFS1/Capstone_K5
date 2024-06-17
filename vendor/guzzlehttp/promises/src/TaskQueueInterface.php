<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
namespace GuzzleHttp\Promise;

interface TaskQueueInterface
{
    /**
     * Returns true if the queue is empty.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isEmpty(): bool;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isEmpty();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Adds a task to the queue that will be executed the next time run is
     * called.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function add(callable $task): void;
=======
    public function add(callable $task);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function add(callable $task);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Execute all of the pending task in the queue.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function run(): void;
=======
    public function run();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function run();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
