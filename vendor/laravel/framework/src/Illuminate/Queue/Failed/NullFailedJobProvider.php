<?php

namespace Illuminate\Queue\Failed;

<<<<<<< HEAD
<<<<<<< HEAD
class NullFailedJobProvider implements CountableFailedJobProvider, FailedJobProviderInterface
=======
class NullFailedJobProvider implements FailedJobProviderInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class NullFailedJobProvider implements FailedJobProviderInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    /**
     * Log a failed job into storage.
     *
     * @param  string  $connection
     * @param  string  $queue
     * @param  string  $payload
     * @param  \Throwable  $exception
     * @return int|null
     */
    public function log($connection, $queue, $payload, $exception)
    {
        //
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the IDs of all of the failed jobs.
     *
     * @param  string|null  $queue
     * @return array
     */
    public function ids($queue = null)
    {
        return [];
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Get a list of all of the failed jobs.
     *
     * @return array
     */
    public function all()
    {
        return [];
    }

    /**
     * Get a single failed job.
     *
     * @param  mixed  $id
     * @return object|null
     */
    public function find($id)
    {
        //
    }

    /**
     * Delete a single failed job from storage.
     *
     * @param  mixed  $id
     * @return bool
     */
    public function forget($id)
    {
        return true;
    }

    /**
     * Flush all of the failed jobs from storage.
     *
     * @param  int|null  $hours
     * @return void
     */
    public function flush($hours = null)
    {
        //
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Count the failed jobs.
     *
     * @param  string|null  $connection
     * @param  string|null  $queue
     * @return int
     */
    public function count($connection = null, $queue = null)
    {
        return 0;
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
