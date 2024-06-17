<?php

namespace Laravel\Sail\Console;

use Illuminate\Console\Command;
use Laravel\Sail\Console\Concerns\InteractsWithDockerComposeServices;
<<<<<<< HEAD
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'sail:add')]
=======

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class AddCommand extends Command
{
    use InteractsWithDockerComposeServices;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sail:add
        {services? : The services that should be added}
    ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a service to an existing Sail installation';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        if ($this->argument('services')) {
            $services = $this->argument('services') == 'none' ? [] : explode(',', $this->argument('services'));
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

<<<<<<< HEAD
        $this->prepareInstallation($services);

        $this->output->writeln('');
        $this->components->info('Additional Sail services installed successfully.');
=======
        $this->info('Additional Sail services installed successfully.');

        $this->prepareInstallation($services);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
