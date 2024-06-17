<?php

namespace Illuminate\Queue;

use RuntimeException;

class MaxAttemptsExceededException extends RuntimeException
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * The job instance.
     *
     * @var \Illuminate\Contracts\Queue\Job|null
     */
    public $job;

    /**
     * Create a new instance for the job.
     *
     * @param  \Illuminate\Contracts\Queue\Job  $job
     * @return static
     */
    public static function forJob($job)
    {
        return tap(new static($job->resolveName().' has been attempted too many times.'), function ($e) use ($job) {
            $e->job = $job;
        });
    }
=======
    //
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    //
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
