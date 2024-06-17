<?php

namespace Illuminate\Queue\Events;

<<<<<<< HEAD
<<<<<<< HEAD
use RuntimeException;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class JobQueued
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The job ID.
     *
     * @var string|int|null
     */
    public $id;

    /**
     * The job instance.
     *
     * @var \Closure|string|object
     */
    public $job;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The job payload.
     *
     * @var string|null
     */
    public $payload;

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  string|int|null  $id
     * @param  \Closure|string|object  $job
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|null  $payload
     * @return void
     */
    public function __construct($connectionName, $id, $job, $payload = null)
=======
     * @return void
     */
    public function __construct($connectionName, $id, $job)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return void
     */
    public function __construct($connectionName, $id, $job)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->connectionName = $connectionName;
        $this->id = $id;
        $this->job = $job;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->payload = $payload;
    }

    /**
     * Get the decoded job payload.
     *
     * @return array
     */
    public function payload()
    {
        if ($this->payload === null) {
            throw new RuntimeException('The job payload was not provided when the event was dispatched.');
        }

        return json_decode($this->payload, true, flags: JSON_THROW_ON_ERROR);
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
