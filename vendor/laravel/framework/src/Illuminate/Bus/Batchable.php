<?php

namespace Illuminate\Bus;

use Carbon\CarbonImmutable;
use Illuminate\Container\Container;
use Illuminate\Support\Str;
use Illuminate\Support\Testing\Fakes\BatchFake;

trait Batchable
{
    /**
     * The batch ID (if applicable).
     *
     * @var string
     */
    public $batchId;

    /**
     * The fake batch, if applicable.
     *
<<<<<<< HEAD
     * @var \Illuminate\Support\Testing\Fakes\BatchFake
=======
     * @var \Illuminate\Support\Testing\BatchFake
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private $fakeBatch;

    /**
     * Get the batch instance for the job, if applicable.
     *
     * @return \Illuminate\Bus\Batch|null
     */
    public function batch()
    {
        if ($this->fakeBatch) {
            return $this->fakeBatch;
        }

        if ($this->batchId) {
<<<<<<< HEAD
            return Container::getInstance()->make(BatchRepository::class)?->find($this->batchId);
=======
            return Container::getInstance()->make(BatchRepository::class)->find($this->batchId);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }

    /**
     * Determine if the batch is still active and processing.
     *
     * @return bool
     */
    public function batching()
    {
        $batch = $this->batch();

        return $batch && ! $batch->cancelled();
    }

    /**
     * Set the batch ID on the job.
     *
     * @param  string  $batchId
     * @return $this
     */
    public function withBatchId(string $batchId)
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * Indicate that the job should use a fake batch.
     *
     * @param  string  $id
     * @param  string  $name
     * @param  int  $totalJobs
     * @param  int  $pendingJobs
     * @param  int  $failedJobs
     * @param  array  $failedJobIds
     * @param  array  $options
<<<<<<< HEAD
     * @param  \Carbon\CarbonImmutable|null  $createdAt
     * @param  \Carbon\CarbonImmutable|null  $cancelledAt
     * @param  \Carbon\CarbonImmutable|null  $finishedAt
     * @return array{0: $this, 1: \Illuminate\Support\Testing\Fakes\BatchFake}
=======
     * @param  \Carbon\CarbonImmutable  $createdAt
     * @param  \Carbon\CarbonImmutable|null  $cancelledAt
     * @param  \Carbon\CarbonImmutable|null  $finishedAt
     * @return array{0: $this, 1: \Illuminate\Support\Testing\BatchFake}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function withFakeBatch(string $id = '',
                                  string $name = '',
                                  int $totalJobs = 0,
                                  int $pendingJobs = 0,
                                  int $failedJobs = 0,
                                  array $failedJobIds = [],
                                  array $options = [],
<<<<<<< HEAD
                                  ?CarbonImmutable $createdAt = null,
=======
                                  CarbonImmutable $createdAt = null,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                  ?CarbonImmutable $cancelledAt = null,
                                  ?CarbonImmutable $finishedAt = null)
    {
        $this->fakeBatch = new BatchFake(
            empty($id) ? (string) Str::uuid() : $id,
            $name,
            $totalJobs,
            $pendingJobs,
            $failedJobs,
            $failedJobIds,
            $options,
            $createdAt ?? CarbonImmutable::now(),
            $cancelledAt,
            $finishedAt,
        );

        return [$this, $this->fakeBatch];
    }
}
