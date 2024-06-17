<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

<<<<<<< HEAD
use function assert;
use function count;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function is_dir;
use function is_file;
use function realpath;
use function str_ends_with;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\Exception;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\TestSuiteLoader;
use PHPUnit\TextUI\RuntimeException;
use PHPUnit\TextUI\TestDirectoryNotFoundException;
use PHPUnit\TextUI\TestFileNotFoundException;
use PHPUnit\TextUI\XmlConfiguration\TestSuiteMapper;
use SebastianBergmann\FileIterator\Facade as FileIteratorFacade;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteBuilder
{
    /**
     * @throws \PHPUnit\Framework\Exception
     * @throws RuntimeException
     * @throws TestDirectoryNotFoundException
     * @throws TestFileNotFoundException
     */
    public function build(Configuration $configuration): TestSuite
    {
<<<<<<< HEAD
        if ($configuration->hasCliArguments()) {
            $arguments = [];

            foreach ($configuration->cliArguments() as $cliArgument) {
                $argument = realpath($cliArgument);

                if (!$argument) {
                    throw new TestFileNotFoundException($cliArgument);
                }

                $arguments[] = $argument;
            }

            if (count($arguments) === 1) {
                $testSuite = $this->testSuiteFromPath(
                    $arguments[0],
                    $configuration->testSuffixes(),
                );
            } else {
                $testSuite = $this->testSuiteFromPathList(
                    $arguments,
                    $configuration->testSuffixes(),
                );
            }
        }

        if (!isset($testSuite)) {
            $xmlConfigurationFile = $configuration->hasConfigurationFile() ? $configuration->configurationFile() : 'Root Test Suite';

            assert(!empty($xmlConfigurationFile));

            $testSuite = (new TestSuiteMapper)->map(
                $xmlConfigurationFile,
                $configuration->testSuite(),
                $configuration->includeTestSuite(),
                $configuration->excludeTestSuite(),
            );
        }

        EventFacade::emitter()->testSuiteLoaded(\PHPUnit\Event\TestSuite\TestSuiteBuilder::from($testSuite));
=======
        if ($configuration->hasCliArgument()) {
            $argument = realpath($configuration->cliArgument());

            if (!$argument) {
                throw new TestFileNotFoundException($configuration->cliArgument());
            }

            $testSuite = $this->testSuiteFromPath(
                $argument,
                $configuration->testSuffixes()
            );
        }

        if (!isset($testSuite)) {
            $testSuite = (new TestSuiteMapper)->map(
                $configuration->testSuite(),
                $configuration->includeTestSuite(),
                $configuration->excludeTestSuite()
            );
        }

        EventFacade::emitter()->testSuiteLoaded(\PHPUnit\Event\TestSuite\TestSuite::fromTestSuite($testSuite));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $testSuite;
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $path
     * @psalm-param list<non-empty-string> $suffixes
     * @psalm-param ?TestSuite $suite
     *
     * @throws \PHPUnit\Framework\Exception
     */
    private function testSuiteFromPath(string $path, array $suffixes, ?TestSuite $suite = null): TestSuite
    {
        if (str_ends_with($path, '.phpt') && is_file($path)) {
            $suite = $suite ?: TestSuite::empty($path);
            $suite->addTestFile($path);
=======
     * @psalm-param list<string> $suffixes
     *
     * @throws \PHPUnit\Framework\Exception
     */
    private function testSuiteFromPath(string $path, array $suffixes): TestSuite
    {
        if (is_dir($path)) {
            $files = (new FileIteratorFacade)->getFilesAsArray($path, $suffixes);

            $suite = TestSuite::empty($path);
            $suite->addTestFiles($files);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            return $suite;
        }

<<<<<<< HEAD
        if (is_dir($path)) {
            $files = (new FileIteratorFacade)->getFilesAsArray($path, $suffixes);

            $suite = $suite ?: TestSuite::empty('CLI Arguments');
            $suite->addTestFiles($files);
=======
        if (is_file($path) && str_ends_with($path, '.phpt')) {
            $suite = TestSuite::empty();
            $suite->addTestFile($path);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            return $suite;
        }

        try {
            $testClass = (new TestSuiteLoader)->load($path);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;

            exit(1);
        }

<<<<<<< HEAD
        if (!$suite) {
            return TestSuite::fromClassReflector($testClass);
        }

        $suite->addTestSuite($testClass);

        return $suite;
    }

    /**
     * @psalm-param list<non-empty-string> $paths
     * @psalm-param list<non-empty-string> $suffixes
     *
     * @throws \PHPUnit\Framework\Exception
     */
    private function testSuiteFromPathList(array $paths, array $suffixes): TestSuite
    {
        $suite = TestSuite::empty('CLI Arguments');

        foreach ($paths as $path) {
            $this->testSuiteFromPath($path, $suffixes, $suite);
        }

        return $suite;
=======
        return TestSuite::fromClassReflector($testClass);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
