<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Transport\Smtp\Stream;

use Symfony\Component\Mailer\Exception\TransportException;

/**
 * A stream supporting local processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Chris Corbyn
 *
 * @internal
 */
final class ProcessStream extends AbstractStream
{
    private string $command;
<<<<<<< HEAD
<<<<<<< HEAD
    private bool $interactive = false;

    public function setCommand(string $command): void
=======

    public function setCommand(string $command)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======

    public function setCommand(string $command)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->command = $command;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setInteractive(bool $interactive): void
    {
        $this->interactive = $interactive;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function initialize(): void
    {
        $descriptorSpec = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
<<<<<<< HEAD
<<<<<<< HEAD
            2 => ['pipe', '\\' === \DIRECTORY_SEPARATOR ? 'a' : 'w'],
=======
            2 => ['pipe', 'w'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            2 => ['pipe', 'w'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];
        $pipes = [];
        $this->stream = proc_open($this->command, $descriptorSpec, $pipes);
        stream_set_blocking($pipes[2], false);
        if ($err = stream_get_contents($pipes[2])) {
            throw new TransportException('Process could not be started: '.$err);
        }
        $this->in = &$pipes[0];
        $this->out = &$pipes[1];
<<<<<<< HEAD
<<<<<<< HEAD
        $this->err = &$pipes[2];
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function terminate(): void
    {
        if (null !== $this->stream) {
            fclose($this->in);
<<<<<<< HEAD
<<<<<<< HEAD
            $out = stream_get_contents($this->out);
            fclose($this->out);
            $err = stream_get_contents($this->err);
            fclose($this->err);
            if (0 !== $exitCode = proc_close($this->stream)) {
                $errorMessage = 'Process failed with exit code '.$exitCode.': '.$out.$err;
            }
        }

        parent::terminate();

        if (!$this->interactive && isset($errorMessage)) {
            throw new TransportException($errorMessage);
        }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            fclose($this->out);
            proc_close($this->stream);
        }

        parent::terminate();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    protected function getReadConnectionDescription(): string
    {
        return 'process '.$this->command;
    }
}
