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

<<<<<<< HEAD
<<<<<<< HEAD
use const PHP_BINARY;
=======
use const DIRECTORY_SEPARATOR;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use const DIRECTORY_SEPARATOR;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use const PHP_SAPI;
use function array_keys;
use function array_merge;
use function assert;
<<<<<<< HEAD
<<<<<<< HEAD
use function explode;
use function file_exists;
use function file_get_contents;
use function ini_get_all;
use function restore_error_handler;
use function set_error_handler;
use function trim;
use function unlink;
use function unserialize;
use ErrorException;
use PHPUnit\Event\Code\TestMethodBuilder;
use PHPUnit\Event\Code\ThrowableBuilder;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function escapeshellarg;
use function ini_get_all;
use function restore_error_handler;
use function set_error_handler;
use function str_replace;
use function str_starts_with;
use function substr;
use function trim;
use function unserialize;
use ErrorException;
use PHPUnit\Event\Code\TestMethod;
use PHPUnit\Event\Code\Throwable;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Event\Facade;
use PHPUnit\Event\NoPreviousThrowableException;
use PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\CodeCoverage;
use PHPUnit\TestRunner\TestResult\PassedTests;
use SebastianBergmann\Environment\Runtime;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class AbstractPhpProcess
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected Runtime $runtime;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected Runtime $runtime;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected bool $stderrRedirection = false;
    protected string $stdin           = '';
    protected string $arguments       = '';

    /**
     * @psalm-var array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected array $env = [];

    public static function factory(): self
    {
        return new DefaultPhpProcess;
    }

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected array $env   = [];
    protected int $timeout = 0;

    public static function factory(): self
    {
        if (DIRECTORY_SEPARATOR === '\\') {
            return new WindowsPhpProcess;
        }

        return new DefaultPhpProcess;
    }

    public function __construct()
    {
        $this->runtime = new Runtime;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Defines if should use STDERR redirection or not.
     *
     * Then $stderrRedirection is TRUE, STDERR is redirected to STDOUT.
     */
    public function setUseStderrRedirection(bool $stderrRedirection): void
    {
        $this->stderrRedirection = $stderrRedirection;
    }

    /**
     * Returns TRUE if uses STDERR redirection or FALSE if not.
     */
    public function useStderrRedirection(): bool
    {
        return $this->stderrRedirection;
    }

    /**
     * Sets the input string to be sent via STDIN.
     */
    public function setStdin(string $stdin): void
    {
        $this->stdin = $stdin;
    }

    /**
     * Returns the input string to be sent via STDIN.
     */
    public function getStdin(): string
    {
        return $this->stdin;
    }

    /**
     * Sets the string of arguments to pass to the php job.
     */
    public function setArgs(string $arguments): void
    {
        $this->arguments = $arguments;
    }

    /**
     * Returns the string of arguments to pass to the php job.
     */
    public function getArgs(): string
    {
        return $this->arguments;
    }

    /**
     * Sets the array of environment variables to start the child process with.
     *
     * @psalm-param array<string, string> $env
     */
    public function setEnv(array $env): void
    {
        $this->env = $env;
    }

    /**
     * Returns the array of environment variables to start the child process with.
     */
    public function getEnv(): array
    {
        return $this->env;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Sets the amount of seconds to wait before timing out.
     */
    public function setTimeout(int $timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * Returns the amount of seconds to wait before timing out.
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Runs a single test in a separate PHP process.
     *
     * @throws \PHPUnit\Runner\Exception
     * @throws Exception
     * @throws MoreThanOneDataSetFromDataProviderException
     * @throws NoPreviousThrowableException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function runTestJob(string $job, Test $test, string $processResultFile): void
    {
        $_result = $this->runJob($job);

        $processResult = '';

        if (file_exists($processResultFile)) {
            $processResult = file_get_contents($processResultFile);

            @unlink($processResultFile);
        }

        $this->processChildResult(
            $test,
            $processResult,
            $_result['stderr'],
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function runTestJob(string $job, Test $test): void
    {
        $_result = $this->runJob($job);

        $this->processChildResult(
            $test,
            $_result['stdout'],
            $_result['stderr']
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * Returns the command based into the configurations.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return string[]
     */
    public function getCommand(array $settings, ?string $file = null): array
    {
        $runtime = new Runtime;

        $command   = [];
        $command[] = PHP_BINARY;

        if ($runtime->hasPCOV()) {
            $settings = array_merge(
                $settings,
                $runtime->getCurrentSettings(
                    array_keys(ini_get_all('pcov')),
                ),
            );
        } elseif ($runtime->hasXdebug()) {
            $settings = array_merge(
                $settings,
                $runtime->getCurrentSettings(
                    array_keys(ini_get_all('xdebug')),
                ),
            );
        }

        $command = array_merge($command, $this->settingsToParameters($settings));

        if (PHP_SAPI === 'phpdbg') {
            $command[] = '-qrr';

            if (!$file) {
                $command[] = 's=';
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function getCommand(array $settings, string $file = null): string
    {
        $command = $this->runtime->getBinary();

        if ($this->runtime->hasPCOV()) {
            $settings = array_merge(
                $settings,
                $this->runtime->getCurrentSettings(
                    array_keys(ini_get_all('pcov'))
                )
            );
        } elseif ($this->runtime->hasXdebug()) {
            $settings = array_merge(
                $settings,
                $this->runtime->getCurrentSettings(
                    array_keys(ini_get_all('xdebug'))
                )
            );
        }

        $command .= $this->settingsToParameters($settings);

        if (PHP_SAPI === 'phpdbg') {
            $command .= ' -qrr';

            if (!$file) {
                $command .= 's=';
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }

        if ($file) {
<<<<<<< HEAD
<<<<<<< HEAD
            $command[] = '-f';
            $command[] = $file;
=======
            $command .= ' ' . escapeshellarg($file);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $command .= ' ' . escapeshellarg($file);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if ($this->arguments) {
            if (!$file) {
<<<<<<< HEAD
<<<<<<< HEAD
                $command[] = '--';
            }

            foreach (explode(' ', $this->arguments) as $arg) {
                $command[] = trim($arg);
            }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $command .= ' --';
            }
            $command .= ' ' . $this->arguments;
        }

        if ($this->stderrRedirection) {
            $command .= ' 2>&1';
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $command;
    }

    /**
     * Runs a single job (PHP code) using a separate PHP process.
     */
    abstract public function runJob(string $job, array $settings = []): array;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return list<string>
     */
    protected function settingsToParameters(array $settings): array
    {
        $buffer = [];

        foreach ($settings as $setting) {
            $buffer[] = '-d';
            $buffer[] = $setting;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function settingsToParameters(array $settings): string
    {
        $buffer = '';

        foreach ($settings as $setting) {
            $buffer .= ' -d ' . escapeshellarg($setting);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $buffer;
    }

    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws Exception
     * @throws MoreThanOneDataSetFromDataProviderException
     * @throws NoPreviousThrowableException
     */
    private function processChildResult(Test $test, string $stdout, string $stderr): void
    {
        if (!empty($stderr)) {
            $exception = new Exception(trim($stderr));

            assert($test instanceof TestCase);

            Facade::emitter()->testErrored(
<<<<<<< HEAD
<<<<<<< HEAD
                TestMethodBuilder::fromTestCase($test),
                ThrowableBuilder::from($exception),
=======
                TestMethod::fromTestCase($test),
                Throwable::from($exception)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                TestMethod::fromTestCase($test),
                Throwable::from($exception)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return;
        }

        set_error_handler(
            /**
             * @throws ErrorException
             */
            static function (int $errno, string $errstr, string $errfile, int $errline): never
            {
                throw new ErrorException($errstr, $errno, $errno, $errfile, $errline);
<<<<<<< HEAD
<<<<<<< HEAD
            },
        );

        try {
            $childResult = unserialize($stdout);

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        );

        try {
            if (str_starts_with($stdout, "#!/usr/bin/env php\n")) {
                $stdout = substr($stdout, 19);
            }

            $childResult = unserialize(str_replace("#!/usr/bin/env php\n", '', $stdout));
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            restore_error_handler();

            if ($childResult === false) {
                $exception = new AssertionFailedError('Test was run in child process and ended unexpectedly');

                assert($test instanceof TestCase);

                Facade::emitter()->testErrored(
<<<<<<< HEAD
<<<<<<< HEAD
                    TestMethodBuilder::fromTestCase($test),
                    ThrowableBuilder::from($exception),
                );

                Facade::emitter()->testFinished(
                    TestMethodBuilder::fromTestCase($test),
                    0,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    TestMethod::fromTestCase($test),
                    Throwable::from($exception)
                );

                Facade::emitter()->testFinished(
                    TestMethod::fromTestCase($test),
                    0
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
        } catch (ErrorException $e) {
            restore_error_handler();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $childResult = false;

            $exception = new Exception(trim($stdout), 0, $e);

            assert($test instanceof TestCase);

            Facade::emitter()->testErrored(
<<<<<<< HEAD
<<<<<<< HEAD
                TestMethodBuilder::fromTestCase($test),
                ThrowableBuilder::from($exception),
=======
                TestMethod::fromTestCase($test),
                Throwable::from($exception)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                TestMethod::fromTestCase($test),
                Throwable::from($exception)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($childResult !== false) {
            if (!empty($childResult['output'])) {
                $output = $childResult['output'];
            }

<<<<<<< HEAD
<<<<<<< HEAD
            Facade::instance()->forward($childResult['events']);
=======
            Facade::forward($childResult['events']);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            Facade::forward($childResult['events']);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            PassedTests::instance()->import($childResult['passedTests']);

            assert($test instanceof TestCase);

            $test->setResult($childResult['testResult']);
            $test->addToAssertionCount($childResult['numAssertions']);

            if (CodeCoverage::instance()->isActive() && $childResult['codeCoverage'] instanceof \SebastianBergmann\CodeCoverage\CodeCoverage) {
                CodeCoverage::instance()->codeCoverage()->merge(
<<<<<<< HEAD
<<<<<<< HEAD
                    $childResult['codeCoverage'],
=======
                    $childResult['codeCoverage']
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $childResult['codeCoverage']
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
        }

        if (!empty($output)) {
            print $output;
        }
    }
}
