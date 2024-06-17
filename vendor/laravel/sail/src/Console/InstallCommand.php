<?php

namespace Laravel\Sail\Console;

use Illuminate\Console\Command;
use RuntimeException;
<<<<<<< HEAD
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Process\Process;

#[AsCommand(name: 'sail:install')]
=======
use Symfony\Component\Process\Process;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class InstallCommand extends Command
{
    use Concerns\InteractsWithDockerComposeServices;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sail:install
                {--with= : The services that should be included in the installation}
                {--devcontainer : Create a .devcontainer configuration directory}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Laravel Sail\'s default Docker Compose file';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        if ($this->option('with')) {
            $services = $this->option('with') == 'none' ? [] : explode(',', $this->option('with'));
        } elseif ($this->option('no-interaction')) {
            $services = $this->defaultServices;
        } else {
<<<<<<< HEAD
            $services = $this->gatherServicesInteractively();
        }

        if ($invalidServices = array_diff($services, $this->services)) {
            $this->components->error('Invalid services ['.implode(',', $invalidServices).'].');
=======
            $services = $this->gatherServicesWithSymfonyMenu();
        }

        if ($invalidServices = array_diff($services, $this->services)) {
            $this->error('Invalid services ['.implode(',', $invalidServices).'].');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            return 1;
        }

        $this->buildDockerCompose($services);
        $this->replaceEnvVariables($services);
        $this->configurePhpUnit();

        if ($this->option('devcontainer')) {
            $this->installDevContainer();
        }

<<<<<<< HEAD
        $this->prepareInstallation($services);

        $this->output->writeln('');
        $this->components->info('Sail scaffolding installed successfully. You may run your Docker containers using Sail\'s "up" command.');

        $this->output->writeln('<fg=gray>➜</> <options=bold>./vendor/bin/sail up</>');

        if (in_array('mysql', $services) ||
            in_array('mariadb', $services) ||
            in_array('pgsql', $services)) {
            $this->components->warn('A database service was installed. Run "artisan migrate" to prepare your database:');

            $this->output->writeln('<fg=gray>➜</> <options=bold>./vendor/bin/sail artisan migrate</>');
        }

        $this->output->writeln('');
=======
        $this->info('Sail scaffolding installed successfully.');

        $this->prepareInstallation($services);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
