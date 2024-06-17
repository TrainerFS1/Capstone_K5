<?php

namespace Illuminate\Queue\Console;

use Illuminate\Bus\BatchRepository;
use Illuminate\Console\Command;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Console\Isolatable;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:retry-batch')]
class RetryBatchCommand extends Command implements Isolatable
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:retry-batch')]
class RetryBatchCommand extends Command
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'queue:retry-batch {id : The ID of the batch whose failed jobs should be retried}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retry the failed jobs for a batch';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $batch = $this->laravel[BatchRepository::class]->find($id = $this->argument('id'));

        if (! $batch) {
            $this->components->error("Unable to find a batch with ID [{$id}].");

            return 1;
        } elseif (empty($batch->failedJobIds)) {
            $this->components->error('The given batch does not contain any failed jobs.');

            return 1;
        }

        $this->components->info("Pushing failed queue jobs of the batch [$id] back onto the queue.");

        foreach ($batch->failedJobIds as $failedJobId) {
            $this->components->task($failedJobId, fn () => $this->callSilent('queue:retry', ['id' => $failedJobId]) == 0);
        }

        $this->newLine();
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Get the custom mutex name for an isolated command.
     *
     * @return string
     */
    public function isolatableId()
    {
        return $this->argument('id');
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
