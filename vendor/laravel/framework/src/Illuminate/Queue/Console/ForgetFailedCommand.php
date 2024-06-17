<?php

namespace Illuminate\Queue\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:forget')]
class ForgetFailedCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'queue:forget {id : The ID of the failed job}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a failed queue job';

    /**
     * Execute the console command.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return int|null
=======
     * @return void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function handle()
    {
        if ($this->laravel['queue.failer']->forget($this->argument('id'))) {
            $this->components->info('Failed job deleted successfully.');
        } else {
            $this->components->error('No failed job matches the given ID.');
<<<<<<< HEAD
<<<<<<< HEAD

            return 1;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }
}
