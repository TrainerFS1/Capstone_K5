<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use const PHP_EOL;
use function assert;
<<<<<<< HEAD
use function defined;
use function error_clear_last;
=======
use function class_exists;
use function defined;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function extension_loaded;
use function get_include_path;
use function hrtime;
use function serialize;
use function sprintf;
use function sys_get_temp_dir;
use function tempnam;
use function unlink;
use function var_export;
use AssertionError;
use PHPUnit\Event;
use PHPUnit\Event\NoPreviousThrowableException;
use PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException;
<<<<<<< HEAD
use PHPUnit\Metadata\Api\CodeCoverage as CodeCoverageMetadataApi;
use PHPUnit\Metadata\Parser\Registry as MetadataRegistry;
use PHPUnit\Runner\CodeCoverage;
use PHPUnit\Runner\ErrorHandler;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Configuration\Registry as ConfigurationRegistry;
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
use PHPUnit\Metadata\Api\CodeCoverage as CodeCoverageMetadataApi;
use PHPUnit\Metadata\Parser\Registry as MetadataRegistry;
use PHPUnit\Runner\CodeCoverage;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Configuration\Registry as ConfigurationRegistry;
use PHPUnit\Util\ErrorHandler;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Util\GlobalState;
use PHPUnit\Util\PHP\AbstractPhpProcess;
use ReflectionClass;
use SebastianBergmann\CodeCoverage\Exception as OriginalCodeCoverageException;
<<<<<<< HEAD
use SebastianBergmann\CodeCoverage\InvalidArgumentException;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use SebastianBergmann\CodeCoverage\StaticAnalysisCacheNotConfiguredException;
use SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException;
use SebastianBergmann\Invoker\Invoker;
use SebastianBergmann\Invoker\TimeoutException;
use SebastianBergmann\Template\Template;
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestRunner
{
    private ?bool $timeLimitCanBeEnforced = null;
    private readonly Configuration $configuration;

    public function __construct()
    {
        $this->configuration = ConfigurationRegistry::get();
    }

    /**
     * @throws \PHPUnit\Runner\Exception
<<<<<<< HEAD
     * @throws CodeCoverageException
     * @throws InvalidArgumentException
     * @throws MoreThanOneDataSetFromDataProviderException
=======
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws CodeCoverageException
     * @throws MoreThanOneDataSetFromDataProviderException
     * @throws NoDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws UnintentionallyCoveredCodeException
     */
    public function run(TestCase $test): void
    {
        Assert::resetCount();

        if ($this->configuration->registerMockObjectsFromTestArgumentsRecursively()) {
            $test->registerMockObjectsFromTestArgumentsRecursively();
        }

        $shouldCodeCoverageBeCollected = (new CodeCoverageMetadataApi)->shouldCodeCoverageBeCollectedFor(
            $test::class,
<<<<<<< HEAD
            $test->name(),
=======
            $test->name()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $error      = false;
        $failure    = false;
        $incomplete = false;
        $risky      = false;
        $skipped    = false;

<<<<<<< HEAD
        error_clear_last();

        if ($this->shouldErrorHandlerBeUsed($test)) {
            ErrorHandler::instance()->enable();
        }
=======
        ErrorHandler::instance()->enable();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $collectCodeCoverage = CodeCoverage::instance()->isActive() &&
                               $shouldCodeCoverageBeCollected;

        if ($collectCodeCoverage) {
            CodeCoverage::instance()->start($test);
        }

        try {
            if ($this->canTimeLimitBeEnforced() &&
                $this->shouldTimeLimitBeEnforced($test)) {
                $risky = $this->runTestWithTimeout($test);
            } else {
                $test->runBare();
            }
        } catch (AssertionFailedError $e) {
            $failure = true;

            if ($e instanceof IncompleteTestError) {
                $incomplete = true;
            } elseif ($e instanceof SkippedTest) {
                $skipped = true;
            }
        } catch (AssertionError $e) {
            $test->addToAssertionCount(1);

            $failure = true;
            $frame   = $e->getTrace()[0];

            assert(isset($frame['file']));
            assert(isset($frame['line']));

            $e = new AssertionFailedError(
                sprintf(
                    '%s in %s:%s',
                    $e->getMessage(),
                    $frame['file'],
<<<<<<< HEAD
                    $frame['line'],
                ),
=======
                    $frame['line']
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } catch (Throwable $e) {
            $error = true;
        }

        $test->addToAssertionCount(Assert::getCount());

        if ($this->configuration->reportUselessTests() &&
<<<<<<< HEAD
            !$test->doesNotPerformAssertions() &&
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $test->numberOfAssertionsPerformed() === 0) {
            $risky = true;
        }

        if (!$error && !$failure && !$incomplete && !$skipped && !$risky &&
            $this->configuration->requireCoverageMetadata() &&
            !$this->hasCoverageMetadata($test::class, $test->name())) {
            Event\Facade::emitter()->testConsideredRisky(
                $test->valueObjectForEvents(),
<<<<<<< HEAD
                'This test does not define a code coverage target but is expected to do so',
=======
                'This test does not define a code coverage target but is expected to do so'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $risky = true;
        }

        if ($collectCodeCoverage) {
            $append           = !$risky && !$incomplete && !$skipped;
            $linesToBeCovered = [];
            $linesToBeUsed    = [];

            if ($append) {
                try {
                    $linesToBeCovered = (new CodeCoverageMetadataApi)->linesToBeCovered(
                        $test::class,
<<<<<<< HEAD
                        $test->name(),
=======
                        $test->name()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );

                    $linesToBeUsed = (new CodeCoverageMetadataApi)->linesToBeUsed(
                        $test::class,
<<<<<<< HEAD
                        $test->name(),
=======
                        $test->name()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                } catch (InvalidCoversTargetException $cce) {
                    Event\Facade::emitter()->testTriggeredPhpunitWarning(
                        $test->valueObjectForEvents(),
<<<<<<< HEAD
                        $cce->getMessage(),
                    );

                    $append = false;
=======
                        $cce->getMessage()
                    );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }
            }

            try {
                CodeCoverage::instance()->stop(
                    $append,
                    $linesToBeCovered,
<<<<<<< HEAD
                    $linesToBeUsed,
=======
                    $linesToBeUsed
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            } catch (UnintentionallyCoveredCodeException $cce) {
                Event\Facade::emitter()->testConsideredRisky(
                    $test->valueObjectForEvents(),
                    'This test executed code that is not listed as code to be covered or used:' .
                    PHP_EOL .
<<<<<<< HEAD
                    $cce->getMessage(),
=======
                    $cce->getMessage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            } catch (OriginalCodeCoverageException $cce) {
                $error = true;

                $e = $e ?? $cce;
            }
        }

        ErrorHandler::instance()->disable();

<<<<<<< HEAD
        if (!$error &&
            !$incomplete &&
            !$skipped &&
            $this->configuration->reportUselessTests() &&
=======
        if (isset($e)) {
            if ($test->wasPrepared()) {
                Event\Facade::emitter()->testFinished(
                    $test->valueObjectForEvents(),
                    $test->numberOfAssertionsPerformed()
                );
            }

            return;
        }

        if ($this->configuration->reportUselessTests() &&
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            !$test->doesNotPerformAssertions() &&
            $test->numberOfAssertionsPerformed() === 0) {
            Event\Facade::emitter()->testConsideredRisky(
                $test->valueObjectForEvents(),
<<<<<<< HEAD
                'This test did not perform any assertions',
=======
                'This test did not perform any assertions'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($test->doesNotPerformAssertions() &&
            $test->numberOfAssertionsPerformed() > 0) {
            Event\Facade::emitter()->testConsideredRisky(
                $test->valueObjectForEvents(),
                sprintf(
<<<<<<< HEAD
                    'This test is not expected to perform assertions but performed %d assertion%s',
                    $test->numberOfAssertionsPerformed(),
                    $test->numberOfAssertionsPerformed() > 1 ? 's' : '',
                ),
            );
        }

        if ($test->hasUnexpectedOutput()) {
            Event\Facade::emitter()->testPrintedUnexpectedOutput($test->output());
        }

        if ($this->configuration->disallowTestOutput() && $test->hasUnexpectedOutput()) {
=======
                    'This test is not expected to perform assertions but performed %d assertions',
                    $test->numberOfAssertionsPerformed()
                )
            );
        }

        if ($this->configuration->disallowTestOutput() && $test->hasOutput()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            Event\Facade::emitter()->testConsideredRisky(
                $test->valueObjectForEvents(),
                sprintf(
                    'This test printed output: %s',
<<<<<<< HEAD
                    $test->output(),
                ),
=======
                    $test->output()
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($test->wasPrepared()) {
            Event\Facade::emitter()->testFinished(
                $test->valueObjectForEvents(),
<<<<<<< HEAD
                $test->numberOfAssertionsPerformed(),
=======
                $test->numberOfAssertionsPerformed()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws \PHPUnit\Util\Exception
     * @throws \SebastianBergmann\Template\InvalidArgumentException
     * @throws Exception
     * @throws MoreThanOneDataSetFromDataProviderException
     * @throws NoPreviousThrowableException
     * @throws ProcessIsolationException
     * @throws StaticAnalysisCacheNotConfiguredException
     */
    public function runInSeparateProcess(TestCase $test, bool $runEntireClass, bool $preserveGlobalState): void
    {
        $class = new ReflectionClass($test);

        if ($runEntireClass) {
            $template = new Template(
<<<<<<< HEAD
                __DIR__ . '/../Util/PHP/Template/TestCaseClass.tpl',
            );
        } else {
            $template = new Template(
                __DIR__ . '/../Util/PHP/Template/TestCaseMethod.tpl',
=======
                __DIR__ . '/../Util/PHP/Template/TestCaseClass.tpl'
            );
        } else {
            $template = new Template(
                __DIR__ . '/../Util/PHP/Template/TestCaseMethod.tpl'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $bootstrap     = '';
        $constants     = '';
        $globals       = '';
        $includedFiles = '';
        $iniSettings   = '';

        if (ConfigurationRegistry::get()->hasBootstrap()) {
            $bootstrap = ConfigurationRegistry::get()->bootstrap();
        }

        if ($preserveGlobalState) {
            $constants     = GlobalState::getConstantsAsString();
            $globals       = GlobalState::getGlobalsAsString();
            $includedFiles = GlobalState::getIncludedFilesAsString();
            $iniSettings   = GlobalState::getIniSettingsAsString();
        }

<<<<<<< HEAD
        $exportObjects    = Event\Facade::emitter()->exportsObjects() ? 'true' : 'false';
        $coverage         = CodeCoverage::instance()->isActive() ? 'true' : 'false';
        $linesToBeIgnored = var_export(CodeCoverage::instance()->linesToBeIgnored(), true);
=======
        $coverage = CodeCoverage::instance()->isActive() ? 'true' : 'false';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if (defined('PHPUNIT_COMPOSER_INSTALL')) {
            $composerAutoload = var_export(PHPUNIT_COMPOSER_INSTALL, true);
        } else {
            $composerAutoload = '\'\'';
        }

        if (defined('__PHPUNIT_PHAR__')) {
            $phar = var_export(__PHPUNIT_PHAR__, true);
        } else {
            $phar = '\'\'';
        }

        $data            = var_export(serialize($test->providedData()), true);
        $dataName        = var_export($test->dataName(), true);
        $dependencyInput = var_export(serialize($test->dependencyInput()), true);
        $includePath     = var_export(get_include_path(), true);
        // must do these fixes because TestCaseMethod.tpl has unserialize('{data}') in it, and we can't break BC
        // the lines above used to use addcslashes() rather than var_export(), which breaks null byte escape sequences
<<<<<<< HEAD
        $data                    = "'." . $data . ".'";
        $dataName                = "'.(" . $dataName . ").'";
        $dependencyInput         = "'." . $dependencyInput . ".'";
        $includePath             = "'." . $includePath . ".'";
        $offset                  = hrtime();
        $serializedConfiguration = $this->saveConfigurationForChildProcess();
        $processResultFile       = tempnam(sys_get_temp_dir(), 'phpunit_');
=======
        $data            = "'." . $data . ".'";
        $dataName        = "'.(" . $dataName . ").'";
        $dependencyInput = "'." . $dependencyInput . ".'";
        $includePath     = "'." . $includePath . ".'";

        $offset = hrtime();

        $serializedConfiguration = $this->saveConfigurationForChildProcess();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $var = [
            'bootstrap'                      => $bootstrap,
            'composerAutoload'               => $composerAutoload,
            'phar'                           => $phar,
            'filename'                       => $class->getFileName(),
            'className'                      => $class->getName(),
            'collectCodeCoverageInformation' => $coverage,
<<<<<<< HEAD
            'linesToBeIgnored'               => $linesToBeIgnored,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'data'                           => $data,
            'dataName'                       => $dataName,
            'dependencyInput'                => $dependencyInput,
            'constants'                      => $constants,
            'globals'                        => $globals,
            'include_path'                   => $includePath,
            'included_files'                 => $includedFiles,
            'iniSettings'                    => $iniSettings,
            'name'                           => $test->name(),
            'offsetSeconds'                  => $offset[0],
            'offsetNanoseconds'              => $offset[1],
            'serializedConfiguration'        => $serializedConfiguration,
<<<<<<< HEAD
            'processResultFile'              => $processResultFile,
            'exportObjects'                  => $exportObjects,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];

        if (!$runEntireClass) {
            $var['methodName'] = $test->name();
        }

        $template->setVar($var);

        $php = AbstractPhpProcess::factory();
<<<<<<< HEAD
        $php->runTestJob($template->render(), $test, $processResultFile);
=======
        $php->runTestJob($template->render(), $test);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        @unlink($serializedConfiguration);
    }

    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
     * @psalm-param non-empty-string $methodName
     */
    private function hasCoverageMetadata(string $className, string $methodName): bool
    {
        foreach (MetadataRegistry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
            if ($metadata->isCovers()) {
                return true;
            }

            if ($metadata->isCoversClass()) {
                return true;
            }

            if ($metadata->isCoversFunction()) {
                return true;
            }

            if ($metadata->isCoversNothing()) {
                return true;
            }
=======
     */
    private function hasCoverageMetadata(string $className, string $methodName): bool
    {
        $metadata = MetadataRegistry::parser()->forClassAndMethod($className, $methodName);

        if ($metadata->isCovers()->isNotEmpty()) {
            return true;
        }

        if ($metadata->isCoversClass()->isNotEmpty()) {
            return true;
        }

        if ($metadata->isCoversFunction()->isNotEmpty()) {
            return true;
        }

        if ($metadata->isCoversNothing()->isNotEmpty()) {
            return true;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return false;
    }

    private function canTimeLimitBeEnforced(): bool
    {
        if ($this->timeLimitCanBeEnforced !== null) {
            return $this->timeLimitCanBeEnforced;
        }

<<<<<<< HEAD
=======
        if (!class_exists(Invoker::class)) {
            $this->timeLimitCanBeEnforced = false;

            return $this->timeLimitCanBeEnforced;
        }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->timeLimitCanBeEnforced = (new Invoker)->canInvokeWithTimeout();

        return $this->timeLimitCanBeEnforced;
    }

    private function shouldTimeLimitBeEnforced(TestCase $test): bool
    {
        if (!$this->configuration->enforceTimeLimit()) {
            return false;
        }

        if (!(($this->configuration->defaultTimeLimit() || $test->size()->isKnown()))) {
            return false;
        }

        if (extension_loaded('xdebug') && xdebug_is_debugger_active()) {
            return false;
        }

        return true;
    }

    /**
     * @throws Throwable
     */
    private function runTestWithTimeout(TestCase $test): bool
    {
        $_timeout = $this->configuration->defaultTimeLimit();
<<<<<<< HEAD
        $testSize = $test->size();

        if ($testSize->isSmall()) {
            $_timeout = $this->configuration->timeoutForSmallTests();
        } elseif ($testSize->isMedium()) {
            $_timeout = $this->configuration->timeoutForMediumTests();
        } elseif ($testSize->isLarge()) {
=======

        if ($test->size()->isSmall()) {
            $_timeout = $this->configuration->timeoutForSmallTests();
        } elseif ($test->size()->isMedium()) {
            $_timeout = $this->configuration->timeoutForMediumTests();
        } elseif ($test->size()->isLarge()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $_timeout = $this->configuration->timeoutForLargeTests();
        }

        try {
            (new Invoker)->invoke([$test, 'runBare'], [], $_timeout);
        } catch (TimeoutException) {
            Event\Facade::emitter()->testConsideredRisky(
                $test->valueObjectForEvents(),
                sprintf(
                    'This test was aborted after %d second%s',
                    $_timeout,
<<<<<<< HEAD
                    $_timeout !== 1 ? 's' : '',
                ),
=======
                    $_timeout !== 1 ? 's' : ''
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return true;
        }

        return false;
    }

    /**
     * @throws ProcessIsolationException
     */
    private function saveConfigurationForChildProcess(): string
    {
<<<<<<< HEAD
        $path = tempnam(sys_get_temp_dir(), 'phpunit_');

        if ($path === false) {
=======
        $path = tempnam(sys_get_temp_dir(), 'PHPUnit');

        if (!$path) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new ProcessIsolationException;
        }

        if (!ConfigurationRegistry::saveTo($path)) {
            throw new ProcessIsolationException;
        }

        return $path;
    }
<<<<<<< HEAD

    private function shouldErrorHandlerBeUsed(TestCase $test): bool
    {
        if (MetadataRegistry::parser()->forMethod($test::class, $test->name())->isWithoutErrorHandler()->isNotEmpty()) {
            return false;
        }

        return true;
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
