<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process;

/**
 * An executable finder specifically designed for the PHP executable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PhpExecutableFinder
{
<<<<<<< HEAD
    private ExecutableFinder $executableFinder;
=======
    private $executableFinder;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function __construct()
    {
        $this->executableFinder = new ExecutableFinder();
    }

    /**
     * Finds The PHP executable.
     */
    public function find(bool $includeArgs = true): string|false
    {
        if ($php = getenv('PHP_BINARY')) {
            if (!is_executable($php)) {
<<<<<<< HEAD
                $command = '\\' === \DIRECTORY_SEPARATOR ? 'where' : 'command -v --';
                if (\function_exists('exec') && $php = strtok(exec($command.' '.escapeshellarg($php)), \PHP_EOL)) {
=======
                $command = '\\' === \DIRECTORY_SEPARATOR ? 'where' : 'command -v';
                if ($php = strtok(exec($command.' '.escapeshellarg($php)), \PHP_EOL)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    if (!is_executable($php)) {
                        return false;
                    }
                } else {
                    return false;
                }
            }

            if (@is_dir($php)) {
                return false;
            }

            return $php;
        }

        $args = $this->findArguments();
        $args = $includeArgs && $args ? ' '.implode(' ', $args) : '';

        // PHP_BINARY return the current sapi executable
<<<<<<< HEAD
        if (\PHP_BINARY && \in_array(\PHP_SAPI, ['cli', 'cli-server', 'phpdbg'], true)) {
=======
        if (\PHP_BINARY && \in_array(\PHP_SAPI, ['cgi-fcgi', 'cli', 'cli-server', 'phpdbg'], true)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return \PHP_BINARY.$args;
        }

        if ($php = getenv('PHP_PATH')) {
            if (!@is_executable($php) || @is_dir($php)) {
                return false;
            }

            return $php;
        }

        if ($php = getenv('PHP_PEAR_PHP_BIN')) {
            if (@is_executable($php) && !@is_dir($php)) {
                return $php;
            }
        }

        if (@is_executable($php = \PHP_BINDIR.('\\' === \DIRECTORY_SEPARATOR ? '\\php.exe' : '/php')) && !@is_dir($php)) {
            return $php;
        }

        $dirs = [\PHP_BINDIR];
        if ('\\' === \DIRECTORY_SEPARATOR) {
            $dirs[] = 'C:\xampp\php\\';
        }

        return $this->executableFinder->find('php', false, $dirs);
    }

    /**
     * Finds the PHP executable arguments.
     */
    public function findArguments(): array
    {
        $arguments = [];
        if ('phpdbg' === \PHP_SAPI) {
            $arguments[] = '-qrr';
        }

        return $arguments;
    }
}
