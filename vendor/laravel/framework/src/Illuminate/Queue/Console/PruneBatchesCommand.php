<?php

namespace Illuminate\Queue\Console;

use Illuminate\Bus\BatchRepository;
use Illuminate\Bus\DatabaseBatchRepository;
use Illuminate\Bus\PrunableBatchRepository;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:prune-batches')]
class PruneBatchesCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'queue:prune-batches
                {--hours=24 : The number of hours to retain batch data}
                {--unfinished= : The number of hours to retain unfinished batch data }
                {--cancelled= : The number of hours to retain cancelled batch data }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prune stale entries from the batches database';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $repository = $this->laravel[BatchRepository::class];

        $count = 0;

        if ($repository instanceof PrunableBatchRepository) {
            $count = $repository->prune(Carbon::now()->subHours($this->option('hours')));
        }

        $this->components->info("{$count} entries deleted.");

<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->option('unfinished') !== null) {
=======
        if ($this->option('unfinished')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if ($this->option('unfinished')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $count = 0;

            if ($repository instanceof DatabaseBatchRepository) {
                $count = $repository->pruneUnfinished(Carbon::now()->subHours($this->option('unfinished')));
            }

            $this->components->info("{$count} unfinished entries deleted.");
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->option('cancelled') !== null) {
=======
        if ($this->option('cancelled')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if ($this->option('cancelled')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $count = 0;

            if ($repository instanceof DatabaseBatchRepository) {
                $count = $repository->pruneCancelled(Carbon::now()->subHours($this->option('cancelled')));
            }

            $this->components->info("{$count} cancelled entries deleted.");
        }
    }
}
