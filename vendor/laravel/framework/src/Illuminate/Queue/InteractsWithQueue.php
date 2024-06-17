<?php

namespace Illuminate\Queue;

<<<<<<< HEAD
use DateTimeInterface;
use Illuminate\Contracts\Queue\Job as JobContract;
use Illuminate\Support\InteractsWithTime;
=======
use Illuminate\Contracts\Queue\Job as JobContract;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use InvalidArgumentException;
use Throwable;

trait InteractsWithQueue
{
<<<<<<< HEAD
    use InteractsWithTime;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * The underlying queue job instance.
     *
     * @var \Illuminate\Contracts\Queue\Job|null
     */
    public $job;

    /**
     * Get the number of times the job has been attempted.
     *
     * @return int
     */
    public function attempts()
    {
        return $this->job ? $this->job->attempts() : 1;
    }

    /**
     * Delete the job from the queue.
     *
     * @return void
     */
    public function delete()
    {
        if ($this->job) {
            return $this->job->delete();
        }
    }

    /**
     * Fail the job from the queue.
     *
     * @param  \Throwable|string|null  $exception
     * @return void
     */
    public function fail($exception = null)
    {
        if (is_string($exception)) {
            $exception = new ManuallyFailedException($exception);
        }

        if ($exception instanceof Throwable || is_null($exception)) {
            if ($this->job) {
                return $this->job->fail($exception);
            }
        } else {
            throw new InvalidArgumentException('The fail method requires a string or an instance of Throwable.');
        }
    }

    /**
     * Release the job back into the queue after (n) seconds.
     *
<<<<<<< HEAD
     * @param  \DateTimeInterface|\DateInterval|int  $delay
=======
     * @param  int  $delay
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return void
     */
    public function release($delay = 0)
    {
<<<<<<< HEAD
        $delay = $delay instanceof DateTimeInterface
            ? $this->secondsUntil($delay)
            : $delay;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($this->job) {
            return $this->job->release($delay);
        }
    }

    /**
     * Set the base queue job instance.
     *
     * @param  \Illuminate\Contracts\Queue\Job  $job
     * @return $this
     */
    public function setJob(JobContract $job)
    {
        $this->job = $job;

        return $this;
    }
}
