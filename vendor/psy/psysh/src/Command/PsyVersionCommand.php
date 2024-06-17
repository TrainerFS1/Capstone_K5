<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * A dumb little command for printing out the current Psy Shell version.
 */
class PsyVersionCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('version')
            ->setDefinition([])
            ->setDescription('Show Psy Shell version.')
            ->setHelp('Show Psy Shell version.');
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    protected function execute(InputInterface $input, OutputInterface $output): int
=======
    protected function execute(InputInterface $input, OutputInterface $output)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $output->writeln($this->getApplication()->getVersion());

        return 0;
    }
}
