<?php

namespace Laravel\Sail\Console;

use Illuminate\Console\Command;
<<<<<<< HEAD
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'sail:publish')]
=======

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sail:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the Laravel Sail Docker files';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'sail-docker']);
<<<<<<< HEAD
        $this->call('vendor:publish', ['--tag' => 'sail-database']);
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        file_put_contents(
            $this->laravel->basePath('docker-compose.yml'),
            str_replace(
                [
<<<<<<< HEAD
                    './vendor/laravel/sail/runtimes/8.3',
                    './vendor/laravel/sail/runtimes/8.2',
                    './vendor/laravel/sail/runtimes/8.1',
                    './vendor/laravel/sail/runtimes/8.0',
                    './vendor/laravel/sail/database/mysql',
                    './vendor/laravel/sail/database/pgsql'
                ],
                [
                    './docker/8.3',
                    './docker/8.2',
                    './docker/8.1',
                    './docker/8.0',
                    './docker/mysql',
                    './docker/pgsql'
=======
                    './vendor/laravel/sail/runtimes/8.2',
                    './vendor/laravel/sail/runtimes/8.1',
                    './vendor/laravel/sail/runtimes/8.0',
                    './vendor/laravel/sail/runtimes/7.4',
                ],
                [
                    './docker/8.2',
                    './docker/8.1',
                    './docker/8.0',
                    './docker/7.4',
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                ],
                file_get_contents($this->laravel->basePath('docker-compose.yml'))
            )
        );
    }
}
