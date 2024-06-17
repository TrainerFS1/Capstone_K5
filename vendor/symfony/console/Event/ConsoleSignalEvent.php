<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Event;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author marie <marie@users.noreply.github.com>
 */
final class ConsoleSignalEvent extends ConsoleEvent
{
    private int $handlingSignal;
<<<<<<< HEAD
    private int|false $exitCode;

    public function __construct(Command $command, InputInterface $input, OutputInterface $output, int $handlingSignal, int|false $exitCode = 0)
    {
        parent::__construct($command, $input, $output);
        $this->handlingSignal = $handlingSignal;
        $this->exitCode = $exitCode;
=======

    public function __construct(Command $command, InputInterface $input, OutputInterface $output, int $handlingSignal)
    {
        parent::__construct($command, $input, $output);
        $this->handlingSignal = $handlingSignal;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getHandlingSignal(): int
    {
        return $this->handlingSignal;
    }
<<<<<<< HEAD

    public function setExitCode(int $exitCode): void
    {
        if ($exitCode < 0 || $exitCode > 255) {
            throw new \InvalidArgumentException('Exit code must be between 0 and 255.');
        }

        $this->exitCode = $exitCode;
    }

    public function abortExit(): void
    {
        $this->exitCode = false;
    }

    public function getExitCode(): int|false
    {
        return $this->exitCode;
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
