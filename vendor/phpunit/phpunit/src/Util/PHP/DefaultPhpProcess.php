<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util\PHP;

use function array_merge;
use function fclose;
use function file_put_contents;
<<<<<<< HEAD
=======
use function fread;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function fwrite;
use function is_array;
use function is_resource;
use function proc_close;
use function proc_open;
<<<<<<< HEAD
use function stream_get_contents;
=======
use function proc_terminate;
use function rewind;
use function sprintf;
use function stream_get_contents;
use function stream_select;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function sys_get_temp_dir;
use function tempnam;
use function unlink;
use PHPUnit\Framework\Exception;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class DefaultPhpProcess extends AbstractPhpProcess
{
    private ?string $tempFile = null;

    /**
     * Runs a single job (PHP code) using a separate PHP process.
     *
<<<<<<< HEAD
     * @psalm-return array{stdout: string, stderr: string}
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws Exception
     * @throws PhpProcessException
     */
    public function runJob(string $job, array $settings = []): array
    {
<<<<<<< HEAD
        if ($this->stdin) {
            if (!($this->tempFile = tempnam(sys_get_temp_dir(), 'phpunit_')) ||
                file_put_contents($this->tempFile, $job) === false) {
                throw new PhpProcessException(
                    'Unable to write temporary file',
=======
        if ($this->stdin || $this->useTemporaryFile()) {
            if (!($this->tempFile = tempnam(sys_get_temp_dir(), 'PHPUnit')) ||
                file_put_contents($this->tempFile, $job) === false) {
                throw new PhpProcessException(
                    'Unable to write temporary file'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $job = $this->stdin;
        }

        return $this->runProcess($job, $settings);
    }

    /**
<<<<<<< HEAD
     * Handles creating the child process and returning the STDOUT and STDERR.
     *
     * @psalm-return array{stdout: string, stderr: string}
     *
=======
     * Returns an array of file handles to be used in place of pipes.
     */
    protected function getHandles(): array
    {
        return [];
    }

    /**
     * Handles creating the child process and returning the STDOUT and STDERR.
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws Exception
     * @throws PhpProcessException
     */
    protected function runProcess(string $job, array $settings): array
    {
<<<<<<< HEAD
=======
        $handles = $this->getHandles();

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $env = null;

        if ($this->env) {
            $env = $_SERVER ?? [];
            unset($env['argv'], $env['argc']);
            $env = array_merge($env, $this->env);

            foreach ($env as $envKey => $envVar) {
                if (is_array($envVar)) {
                    unset($env[$envKey]);
                }
            }
        }

        $pipeSpec = [
<<<<<<< HEAD
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];

        if ($this->stderrRedirection) {
            $pipeSpec[2] = ['redirect', 1];
        }

=======
            0 => $handles[0] ?? ['pipe', 'r'],
            1 => $handles[1] ?? ['pipe', 'w'],
            2 => $handles[2] ?? ['pipe', 'w'],
        ];

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $process = proc_open(
            $this->getCommand($settings, $this->tempFile),
            $pipeSpec,
            $pipes,
            null,
<<<<<<< HEAD
            $env,
=======
            $env
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        if (!is_resource($process)) {
            throw new PhpProcessException(
<<<<<<< HEAD
                'Unable to spawn worker process',
=======
                'Unable to spawn worker process'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($job) {
            $this->process($pipes[0], $job);
        }

        fclose($pipes[0]);

        $stderr = $stdout = '';

<<<<<<< HEAD
        if (isset($pipes[1])) {
            $stdout = stream_get_contents($pipes[1]);

            fclose($pipes[1]);
        }

        if (isset($pipes[2])) {
            $stderr = stream_get_contents($pipes[2]);

            fclose($pipes[2]);
=======
        if ($this->timeout) {
            unset($pipes[0]);

            while (true) {
                $r = $pipes;
                $w = null;
                $e = null;

                $n = @stream_select($r, $w, $e, $this->timeout);

                if ($n === false) {
                    break;
                }

                if ($n === 0) {
                    proc_terminate($process, 9);

                    throw new PhpProcessException(
                        sprintf(
                            'Job execution aborted after %d seconds',
                            $this->timeout
                        )
                    );
                }

                if ($n > 0) {
                    foreach ($r as $pipe) {
                        $pipeOffset = 0;

                        foreach ($pipes as $i => $origPipe) {
                            if ($pipe === $origPipe) {
                                $pipeOffset = $i;

                                break;
                            }
                        }

                        if (!$pipeOffset) {
                            break;
                        }

                        $line = fread($pipe, 8192);

                        if ($line === '' || $line === false) {
                            fclose($pipes[$pipeOffset]);

                            unset($pipes[$pipeOffset]);
                        } elseif ($pipeOffset === 1) {
                            $stdout .= $line;
                        } else {
                            $stderr .= $line;
                        }
                    }

                    if (empty($pipes)) {
                        break;
                    }
                }
            }
        } else {
            if (isset($pipes[1])) {
                $stdout = stream_get_contents($pipes[1]);

                fclose($pipes[1]);
            }

            if (isset($pipes[2])) {
                $stderr = stream_get_contents($pipes[2]);

                fclose($pipes[2]);
            }
        }

        if (isset($handles[1])) {
            rewind($handles[1]);

            $stdout = stream_get_contents($handles[1]);

            fclose($handles[1]);
        }

        if (isset($handles[2])) {
            rewind($handles[2]);

            $stderr = stream_get_contents($handles[2]);

            fclose($handles[2]);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        proc_close($process);

        $this->cleanup();

        return ['stdout' => $stdout, 'stderr' => $stderr];
    }

    /**
     * @param resource $pipe
     */
    protected function process($pipe, string $job): void
    {
        fwrite($pipe, $job);
    }

    protected function cleanup(): void
    {
        if ($this->tempFile) {
            unlink($this->tempFile);
        }
    }
<<<<<<< HEAD
=======

    protected function useTemporaryFile(): bool
    {
        return false;
    }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
