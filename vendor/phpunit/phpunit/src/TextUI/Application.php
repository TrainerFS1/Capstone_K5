<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI;

use const PHP_EOL;
use function is_file;
use function is_readable;
use function printf;
use function realpath;
use function sprintf;
use function trim;
use function unlink;
<<<<<<< HEAD
use PHPUnit\Event\EventFacadeIsSealedException;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\Event\UnknownSubscriberTypeException;
=======
use PHPUnit\Event\Facade as EventFacade;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\TestSuite;
use PHPUnit\Logging\EventLogger;
use PHPUnit\Logging\JUnit\JunitXmlLogger;
use PHPUnit\Logging\TeamCity\TeamCityLogger;
use PHPUnit\Logging\TestDox\HtmlRenderer as TestDoxHtmlRenderer;
use PHPUnit\Logging\TestDox\PlainTextRenderer as TestDoxTextRenderer;
use PHPUnit\Logging\TestDox\TestResultCollector as TestDoxResultCollector;
<<<<<<< HEAD
use PHPUnit\Metadata\Api\CodeCoverage as CodeCoverageMetadataApi;
use PHPUnit\Runner\Baseline\CannotLoadBaselineException;
use PHPUnit\Runner\Baseline\Generator as BaselineGenerator;
use PHPUnit\Runner\Baseline\Reader;
use PHPUnit\Runner\Baseline\Writer;
use PHPUnit\Runner\CodeCoverage;
use PHPUnit\Runner\DirectoryDoesNotExistException;
use PHPUnit\Runner\ErrorHandler;
use PHPUnit\Runner\Extension\ExtensionBootstrapper;
use PHPUnit\Runner\Extension\Facade as ExtensionFacade;
use PHPUnit\Runner\Extension\PharLoader;
use PHPUnit\Runner\GarbageCollection\GarbageCollectionHandler;
=======
use PHPUnit\Runner\CodeCoverage;
use PHPUnit\Runner\Extension\ExtensionBootstrapper;
use PHPUnit\Runner\Extension\Facade as ExtensionFacade;
use PHPUnit\Runner\Extension\PharLoader;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Runner\ResultCache\DefaultResultCache;
use PHPUnit\Runner\ResultCache\NullResultCache;
use PHPUnit\Runner\ResultCache\ResultCache;
use PHPUnit\Runner\ResultCache\ResultCacheHandler;
use PHPUnit\Runner\TestSuiteSorter;
use PHPUnit\Runner\Version;
use PHPUnit\TestRunner\TestResult\Facade as TestResultFacade;
use PHPUnit\TextUI\CliArguments\Builder;
use PHPUnit\TextUI\CliArguments\Configuration as CliConfiguration;
use PHPUnit\TextUI\CliArguments\Exception as ArgumentsException;
use PHPUnit\TextUI\CliArguments\XmlConfigurationFileFinder;
use PHPUnit\TextUI\Command\AtLeastVersionCommand;
use PHPUnit\TextUI\Command\GenerateConfigurationCommand;
use PHPUnit\TextUI\Command\ListGroupsCommand;
use PHPUnit\TextUI\Command\ListTestsAsTextCommand;
use PHPUnit\TextUI\Command\ListTestsAsXmlCommand;
use PHPUnit\TextUI\Command\ListTestSuitesCommand;
use PHPUnit\TextUI\Command\MigrateConfigurationCommand;
use PHPUnit\TextUI\Command\Result;
use PHPUnit\TextUI\Command\ShowHelpCommand;
use PHPUnit\TextUI\Command\ShowVersionCommand;
use PHPUnit\TextUI\Command\VersionCheckCommand;
use PHPUnit\TextUI\Command\WarmCodeCoverageCacheCommand;
use PHPUnit\TextUI\Configuration\CodeCoverageFilterRegistry;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Configuration\PhpHandler;
use PHPUnit\TextUI\Configuration\Registry;
use PHPUnit\TextUI\Configuration\TestSuiteBuilder;
use PHPUnit\TextUI\Output\DefaultPrinter;
use PHPUnit\TextUI\Output\Facade as OutputFacade;
use PHPUnit\TextUI\Output\Printer;
use PHPUnit\TextUI\XmlConfiguration\Configuration as XmlConfiguration;
use PHPUnit\TextUI\XmlConfiguration\DefaultConfiguration;
use PHPUnit\TextUI\XmlConfiguration\Loader;
use SebastianBergmann\Timer\Timer;
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Application
{
    public function run(array $argv): int
    {
        try {
            EventFacade::emitter()->applicationStarted();

            $cliConfiguration           = $this->buildCliConfiguration($argv);
            $pathToXmlConfigurationFile = (new XmlConfigurationFileFinder)->find($cliConfiguration);

            $this->executeCommandsThatOnlyRequireCliConfiguration($cliConfiguration, $pathToXmlConfigurationFile);

            $xmlConfiguration = $this->loadXmlConfiguration($pathToXmlConfigurationFile);

            $configuration = Registry::init(
                $cliConfiguration,
<<<<<<< HEAD
                $xmlConfiguration,
=======
                $xmlConfiguration
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            (new PhpHandler)->handle($configuration->php());

            if ($configuration->hasBootstrap()) {
                $this->loadBootstrapScript($configuration->bootstrap());
            }

            $this->executeCommandsThatRequireCompleteConfiguration($configuration, $cliConfiguration);

            $testSuite = $this->buildTestSuite($configuration);

            $this->executeCommandsThatRequireCliConfigurationAndTestSuite($cliConfiguration, $testSuite);
            $this->executeHelpCommandWhenThereIsNothingElseToDo($configuration, $testSuite);

<<<<<<< HEAD
            $pharExtensions                          = null;
            $extensionRequiresCodeCoverageCollection = false;
            $extensionReplacesOutput                 = false;
            $extensionReplacesProgressOutput         = false;
            $extensionReplacesResultOutput           = false;
            $extensionRequiresExportOfObjects        = false;
=======
            $pharExtensions = null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            if (!$configuration->noExtensions()) {
                if ($configuration->hasPharExtensionDirectory()) {
                    $pharExtensions = (new PharLoader)->loadPharExtensionsInDirectory(
<<<<<<< HEAD
                        $configuration->pharExtensionDirectory(),
                    );
                }

                $bootstrappedExtensions                  = $this->bootstrapExtensions($configuration);
                $extensionRequiresCodeCoverageCollection = $bootstrappedExtensions['requiresCodeCoverageCollection'];
                $extensionReplacesOutput                 = $bootstrappedExtensions['replacesOutput'];
                $extensionReplacesProgressOutput         = $bootstrappedExtensions['replacesProgressOutput'];
                $extensionReplacesResultOutput           = $bootstrappedExtensions['replacesResultOutput'];
                $extensionRequiresExportOfObjects        = $bootstrappedExtensions['requiresExportOfObjects'];
            }

            if ($extensionRequiresExportOfObjects) {
                EventFacade::emitter()->exportObjects();
            }

            CodeCoverage::instance()->init(
                $configuration,
                CodeCoverageFilterRegistry::instance(),
                $extensionRequiresCodeCoverageCollection,
            );

            if (CodeCoverage::instance()->isActive()) {
                CodeCoverage::instance()->ignoreLines(
                    (new CodeCoverageMetadataApi)->linesToBeIgnored($testSuite),
                );
            }

            $printer = OutputFacade::init(
                $configuration,
                $extensionReplacesProgressOutput,
                $extensionReplacesResultOutput,
            );

            if (!$configuration->debug() && !$extensionReplacesOutput) {
                $this->writeRuntimeInformation($printer, $configuration);
                $this->writePharExtensionInformation($printer, $pharExtensions);
                $this->writeRandomSeedInformation($printer, $configuration);

                $printer->print(PHP_EOL);
            }

            if ($configuration->debug()) {
                EventFacade::instance()->registerTracer(
                    new EventLogger(
                        'php://stdout',
                        false,
                    ),
                );
            }
=======
                        $configuration->pharExtensionDirectory()
                    );
                }

                $this->bootstrapExtensions($configuration);
            }

            CodeCoverage::instance()->init($configuration, CodeCoverageFilterRegistry::instance());

            $printer = OutputFacade::init($configuration);

            $this->writeRuntimeInformation($printer, $configuration);
            $this->writePharExtensionInformation($printer, $pharExtensions);
            $this->writeRandomSeedInformation($printer, $configuration);

            $printer->print(PHP_EOL);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            $this->registerLogfileWriters($configuration);

            $testDoxResultCollector = $this->testDoxResultCollector($configuration);

            TestResultFacade::init();

            $resultCache = $this->initializeTestResultCache($configuration);

<<<<<<< HEAD
            if ($configuration->controlGarbageCollector()) {
                new GarbageCollectionHandler(
                    EventFacade::instance(),
                    $configuration->numberOfTestsBeforeGarbageCollection(),
                );
            }

            $baselineGenerator = $this->configureBaseline($configuration);

            EventFacade::instance()->seal();
=======
            EventFacade::seal();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            $timer = new Timer;
            $timer->start();

            $runner = new TestRunner;

            $runner->run(
                $configuration,
                $resultCache,
<<<<<<< HEAD
                $testSuite,
=======
                $testSuite
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $duration = $timer->stop();

            $testDoxResult = null;

            if (isset($testDoxResultCollector)) {
                $testDoxResult = $testDoxResultCollector->testMethodsGroupedByClass();
            }

            if ($testDoxResult !== null &&
                $configuration->hasLogfileTestdoxHtml()) {
<<<<<<< HEAD
                try {
                    OutputFacade::printerFor($configuration->logfileTestdoxHtml())->print(
                        (new TestDoxHtmlRenderer)->render($testDoxResult),
                    );
                } catch (DirectoryDoesNotExistException|InvalidSocketException $e) {
                    EventFacade::emitter()->testRunnerTriggeredWarning(
                        sprintf(
                            'Cannot log test results in TestDox HTML format to "%s": %s',
                            $configuration->logfileTestdoxHtml(),
                            $e->getMessage(),
                        ),
                    );
                }
=======
                OutputFacade::printerFor($configuration->logfileTestdoxHtml())->print(
                    (new TestDoxHtmlRenderer)->render($testDoxResult)
                );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            if ($testDoxResult !== null &&
                $configuration->hasLogfileTestdoxText()) {
<<<<<<< HEAD
                try {
                    OutputFacade::printerFor($configuration->logfileTestdoxText())->print(
                        (new TestDoxTextRenderer)->render($testDoxResult),
                    );
                } catch (DirectoryDoesNotExistException|InvalidSocketException $e) {
                    EventFacade::emitter()->testRunnerTriggeredWarning(
                        sprintf(
                            'Cannot log test results in TestDox plain text format to "%s": %s',
                            $configuration->logfileTestdoxText(),
                            $e->getMessage(),
                        ),
                    );
                }
=======
                OutputFacade::printerFor($configuration->logfileTestdoxText())->print(
                    (new TestDoxTextRenderer)->render($testDoxResult)
                );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            $result = TestResultFacade::result();

<<<<<<< HEAD
            if (!$extensionReplacesResultOutput && !$configuration->debug()) {
                OutputFacade::printResult($result, $testDoxResult, $duration);
            }

            CodeCoverage::instance()->generateReports($printer, $configuration);

            if (isset($baselineGenerator)) {
                (new Writer)->write(
                    $configuration->generateBaseline(),
                    $baselineGenerator->baseline(),
                );

                $printer->print(
                    sprintf(
                        PHP_EOL . 'Baseline written to %s.' . PHP_EOL,
                        realpath($configuration->generateBaseline()),
                    ),
                );
            }

            $shellExitCode = (new ShellExitCodeCalculator)->calculate(
                $configuration->failOnDeprecation(),
                $configuration->failOnEmptyTestSuite(),
                $configuration->failOnIncomplete(),
                $configuration->failOnNotice(),
                $configuration->failOnRisky(),
                $configuration->failOnSkipped(),
                $configuration->failOnWarning(),
                $result,
=======
            OutputFacade::printResult($result, $testDoxResult, $duration);
            CodeCoverage::instance()->generateReports($printer, $configuration);

            $shellExitCode = (new ShellExitCodeCalculator)->calculate(
                $configuration->failOnEmptyTestSuite(),
                $configuration->failOnRisky(),
                $configuration->failOnWarning(),
                $configuration->failOnIncomplete(),
                $configuration->failOnSkipped(),
                $result
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            EventFacade::emitter()->applicationFinished($shellExitCode);

            return $shellExitCode;
<<<<<<< HEAD
            // @codeCoverageIgnoreStart
        } catch (Throwable $t) {
            $this->exitWithCrashMessage($t);
        }
        // @codeCoverageIgnoreEnd
=======
        } catch (Throwable $t) {
            $this->exitWithCrashMessage($t);
        }
    }

    private function exitWithCrashMessage(Throwable $t): never
    {
        $message = $t->getMessage();

        if (empty(trim($message))) {
            $message = '(no message)';
        }

        printf(
            '%s%sAn error occurred inside PHPUnit.%s%sMessage:  %s%sLocation: %s:%d%s%s%s%s',
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            $message,
            PHP_EOL,
            $t->getFile(),
            $t->getLine(),
            PHP_EOL,
            PHP_EOL,
            $t->getTraceAsString(),
            PHP_EOL
        );

        exit(Result::CRASH);
    }

    private function exitWithErrorMessage(string $message): never
    {
        print Version::getVersionString() . PHP_EOL . PHP_EOL . $message . PHP_EOL;

        exit(Result::EXCEPTION);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    private function execute(Command\Command $command): never
    {
        print Version::getVersionString() . PHP_EOL . PHP_EOL;

        $result = $command->execute();

        print $result->output();

        exit($result->shellExitCode());
    }

    private function loadBootstrapScript(string $filename): void
    {
        if (!is_readable($filename)) {
            $this->exitWithErrorMessage(
                sprintf(
                    'Cannot open bootstrap script "%s"',
<<<<<<< HEAD
                    $filename,
                ),
=======
                    $filename
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        try {
            include_once $filename;
        } catch (Throwable $t) {
<<<<<<< HEAD
            $message = sprintf(
                'Error in bootstrap script: %s:%s%s%s%s',
                $t::class,
                PHP_EOL,
                $t->getMessage(),
                PHP_EOL,
                $t->getTraceAsString(),
            );

            while ($t = $t->getPrevious()) {
                $message .= sprintf(
                    '%s%sPrevious error: %s:%s%s%s%s',
                    PHP_EOL,
                    PHP_EOL,
=======
            $this->exitWithErrorMessage(
                sprintf(
                    'Error in bootstrap script: %s:%s%s%s%s',
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $t::class,
                    PHP_EOL,
                    $t->getMessage(),
                    PHP_EOL,
<<<<<<< HEAD
                    $t->getTraceAsString(),
                );
            }

            $this->exitWithErrorMessage($message);
=======
                    $t->getTraceAsString()
                )
            );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        EventFacade::emitter()->testRunnerBootstrapFinished($filename);
    }

    private function buildCliConfiguration(array $argv): CliConfiguration
    {
        try {
            $cliConfiguration = (new Builder)->fromParameters($argv);
        } catch (ArgumentsException $e) {
            $this->exitWithErrorMessage($e->getMessage());
        }

        return $cliConfiguration;
    }

<<<<<<< HEAD
    private function loadXmlConfiguration(false|string $configurationFile): XmlConfiguration
    {
        if ($configurationFile === false) {
=======
    private function loadXmlConfiguration(string|false $configurationFile): XmlConfiguration
    {
        if (!$configurationFile) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return DefaultConfiguration::create();
        }

        try {
            return (new Loader)->load($configurationFile);
        } catch (Throwable $e) {
            $this->exitWithErrorMessage($e->getMessage());
        }
    }

    private function buildTestSuite(Configuration $configuration): TestSuite
    {
        try {
            return (new TestSuiteBuilder)->build($configuration);
        } catch (Exception $e) {
            $this->exitWithErrorMessage($e->getMessage());
        }
    }

<<<<<<< HEAD
    /**
     * @psalm-return array{requiresCodeCoverageCollection: bool, replacesOutput: bool, replacesProgressOutput: bool, replacesResultOutput: bool, requiresExportOfObjects: bool}
     */
    private function bootstrapExtensions(Configuration $configuration): array
    {
        $facade = new ExtensionFacade;

        $extensionBootstrapper = new ExtensionBootstrapper(
            $configuration,
            $facade,
        );

        foreach ($configuration->extensionBootstrappers() as $bootstrapper) {
            $extensionBootstrapper->bootstrap(
                $bootstrapper['className'],
                $bootstrapper['parameters'],
            );
        }

        return [
            'requiresCodeCoverageCollection' => $facade->requiresCodeCoverageCollection(),
            'replacesOutput'                 => $facade->replacesOutput(),
            'replacesProgressOutput'         => $facade->replacesProgressOutput(),
            'replacesResultOutput'           => $facade->replacesResultOutput(),
            'requiresExportOfObjects'        => $facade->requiresExportOfObjects(),
        ];
    }

    private function executeCommandsThatOnlyRequireCliConfiguration(CliConfiguration $cliConfiguration, false|string $configurationFile): void
=======
    private function bootstrapExtensions(Configuration $configuration): void
    {
        $extensionBootstrapper = new ExtensionBootstrapper(
            $configuration,
            new ExtensionFacade
        );

        foreach ($configuration->extensionBootstrappers() as $bootstrapper) {
            try {
                $extensionBootstrapper->bootstrap(
                    $bootstrapper['className'],
                    $bootstrapper['parameters']
                );
            } catch (\PHPUnit\Runner\Exception $e) {
                $this->exitWithErrorMessage(
                    sprintf(
                        'Error while bootstrapping extension: %s',
                        $e->getMessage()
                    )
                );
            }
        }
    }

    private function executeCommandsThatOnlyRequireCliConfiguration(CliConfiguration $cliConfiguration, string|false $configurationFile): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($cliConfiguration->generateConfiguration()) {
            $this->execute(new GenerateConfigurationCommand);
        }

        if ($cliConfiguration->migrateConfiguration()) {
<<<<<<< HEAD
            if ($configurationFile === false) {
=======
            if (!$configurationFile) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $this->exitWithErrorMessage('No configuration file found to migrate');
            }

            $this->execute(new MigrateConfigurationCommand(realpath($configurationFile)));
        }

        if ($cliConfiguration->hasAtLeastVersion()) {
            $this->execute(new AtLeastVersionCommand($cliConfiguration->atLeastVersion()));
        }

        if ($cliConfiguration->version()) {
            $this->execute(new ShowVersionCommand);
        }

        if ($cliConfiguration->checkVersion()) {
            $this->execute(new VersionCheckCommand);
        }

        if ($cliConfiguration->help()) {
            $this->execute(new ShowHelpCommand(Result::SUCCESS));
        }
    }

    private function executeCommandsThatRequireCliConfigurationAndTestSuite(CliConfiguration $cliConfiguration, TestSuite $testSuite): void
    {
        if ($cliConfiguration->listGroups()) {
            $this->execute(new ListGroupsCommand($testSuite));
        }

        if ($cliConfiguration->listTests()) {
            $this->execute(new ListTestsAsTextCommand($testSuite));
        }

        if ($cliConfiguration->hasListTestsXml()) {
            $this->execute(
                new ListTestsAsXmlCommand(
                    $cliConfiguration->listTestsXml(),
<<<<<<< HEAD
                    $testSuite,
                ),
=======
                    $testSuite
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    private function executeCommandsThatRequireCompleteConfiguration(Configuration $configuration, CliConfiguration $cliConfiguration): void
    {
        if ($cliConfiguration->listSuites()) {
            $this->execute(new ListTestSuitesCommand($configuration->testSuite()));
        }

        if ($cliConfiguration->warmCoverageCache()) {
            $this->execute(new WarmCodeCoverageCacheCommand($configuration, CodeCoverageFilterRegistry::instance()));
        }
    }

    private function executeHelpCommandWhenThereIsNothingElseToDo(Configuration $configuration, TestSuite $testSuite): void
    {
<<<<<<< HEAD
        if ($testSuite->isEmpty() && !$configuration->hasCliArguments() && $configuration->testSuite()->isEmpty()) {
=======
        if ($testSuite->isEmpty() && !$configuration->hasCliArgument() && $configuration->testSuite()->isEmpty()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->execute(new ShowHelpCommand(Result::FAILURE));
        }
    }

    private function writeRuntimeInformation(Printer $printer, Configuration $configuration): void
    {
        $printer->print(Version::getVersionString() . PHP_EOL . PHP_EOL);

        $runtime = 'PHP ' . PHP_VERSION;

        if (CodeCoverage::instance()->isActive()) {
            $runtime .= ' with ' . CodeCoverage::instance()->driver()->nameAndVersion();
        }

        $this->writeMessage($printer, 'Runtime', $runtime);

        if ($configuration->hasConfigurationFile()) {
            $this->writeMessage(
                $printer,
                'Configuration',
<<<<<<< HEAD
                $configuration->configurationFile(),
=======
                $configuration->configurationFile()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
<<<<<<< HEAD
     * @psalm-param ?list<string> $pharExtensions
=======
     * @psalm-param ?array{loadedExtensions: list<string>, notLoadedExtensions: list<string>} $pharExtensions
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private function writePharExtensionInformation(Printer $printer, ?array $pharExtensions): void
    {
        if ($pharExtensions === null) {
            return;
        }

<<<<<<< HEAD
        foreach ($pharExtensions as $extension) {
            $this->writeMessage(
                $printer,
                'Extension',
                $extension,
=======
        foreach ($pharExtensions['loadedExtensions'] as $extension) {
            $this->writeMessage(
                $printer,
                'Extension',
                $extension
            );
        }

        foreach ($pharExtensions['notLoadedExtensions'] as $extension) {
            $this->writeMessage(
                $printer,
                'Extension',
                $extension
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    private function writeMessage(Printer $printer, string $type, string $message): void
    {
        $printer->print(
            sprintf(
                "%-15s%s\n",
                $type . ':',
<<<<<<< HEAD
                $message,
            ),
=======
                $message
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    private function writeRandomSeedInformation(Printer $printer, Configuration $configuration): void
    {
        if ($configuration->executionOrder() === TestSuiteSorter::ORDER_RANDOMIZED) {
            $this->writeMessage(
                $printer,
                'Random Seed',
<<<<<<< HEAD
                (string) $configuration->randomOrderSeed(),
=======
                (string) $configuration->randomOrderSeed()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

<<<<<<< HEAD
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function registerLogfileWriters(Configuration $configuration): void
    {
        if ($configuration->hasLogEventsText()) {
            if (is_file($configuration->logEventsText())) {
                unlink($configuration->logEventsText());
            }

<<<<<<< HEAD
            EventFacade::instance()->registerTracer(
                new EventLogger(
                    $configuration->logEventsText(),
                    false,
                ),
=======
            EventFacade::registerTracer(
                new EventLogger(
                    $configuration->logEventsText(),
                    false
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($configuration->hasLogEventsVerboseText()) {
            if (is_file($configuration->logEventsVerboseText())) {
                unlink($configuration->logEventsVerboseText());
            }

<<<<<<< HEAD
            EventFacade::instance()->registerTracer(
                new EventLogger(
                    $configuration->logEventsVerboseText(),
                    true,
                ),
            );

            EventFacade::emitter()->exportObjects();
        }

        if ($configuration->hasLogfileJunit()) {
            try {
                new JunitXmlLogger(
                    OutputFacade::printerFor($configuration->logfileJunit()),
                    EventFacade::instance(),
                );
            } catch (DirectoryDoesNotExistException|InvalidSocketException $e) {
                EventFacade::emitter()->testRunnerTriggeredWarning(
                    sprintf(
                        'Cannot log test results in JUnit XML format to "%s": %s',
                        $configuration->logfileJunit(),
                        $e->getMessage(),
                    ),
                );
            }
        }

        if ($configuration->hasLogfileTeamcity()) {
            try {
                new TeamCityLogger(
                    DefaultPrinter::from(
                        $configuration->logfileTeamcity(),
                    ),
                    EventFacade::instance(),
                );
            } catch (DirectoryDoesNotExistException|InvalidSocketException $e) {
                EventFacade::emitter()->testRunnerTriggeredWarning(
                    sprintf(
                        'Cannot log test results in TeamCity format to "%s": %s',
                        $configuration->logfileTeamcity(),
                        $e->getMessage(),
                    ),
                );
            }
        }
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
=======
            EventFacade::registerTracer(
                new EventLogger(
                    $configuration->logEventsVerboseText(),
                    true
                )
            );
        }

        if ($configuration->hasLogfileJunit()) {
            new JunitXmlLogger(
                OutputFacade::printerFor($configuration->logfileJunit()),
            );
        }

        if ($configuration->hasLogfileTeamcity()) {
            new TeamCityLogger(
                DefaultPrinter::from(
                    $configuration->logfileTeamcity()
                )
            );
        }
    }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function testDoxResultCollector(Configuration $configuration): ?TestDoxResultCollector
    {
        if ($configuration->hasLogfileTestdoxHtml() ||
            $configuration->hasLogfileTestdoxText() ||
            $configuration->outputIsTestDox()) {
<<<<<<< HEAD
            return new TestDoxResultCollector(EventFacade::instance());
=======
            return new TestDoxResultCollector;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return null;
    }

<<<<<<< HEAD
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function initializeTestResultCache(Configuration $configuration): ResultCache
    {
        if ($configuration->cacheResult()) {
            $cache = new DefaultResultCache($configuration->testResultCacheFile());

<<<<<<< HEAD
            new ResultCacheHandler($cache, EventFacade::instance());
=======
            new ResultCacheHandler($cache);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            return $cache;
        }

        return new NullResultCache;
    }
<<<<<<< HEAD

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    private function configureBaseline(Configuration $configuration): ?BaselineGenerator
    {
        if ($configuration->hasGenerateBaseline()) {
            return new BaselineGenerator(
                EventFacade::instance(),
                $configuration->source(),
            );
        }

        if ($configuration->source()->useBaseline()) {
            /** @psalm-suppress MissingThrowsDocblock */
            $baselineFile = $configuration->source()->baseline();
            $baseline     = null;

            try {
                $baseline = (new Reader)->read($baselineFile);
            } catch (CannotLoadBaselineException $e) {
                EventFacade::emitter()->testRunnerTriggeredWarning($e->getMessage());
            }

            if ($baseline !== null) {
                ErrorHandler::instance()->use($baseline);
            }
        }

        return null;
    }

    /**
     * @codeCoverageIgnore
     */
    private function exitWithCrashMessage(Throwable $t): never
    {
        $message = $t->getMessage();

        if (empty(trim($message))) {
            $message = '(no message)';
        }

        printf(
            '%s%sAn error occurred inside PHPUnit.%s%sMessage:  %s',
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            $message,
        );

        $first = true;

        if ($t->getPrevious()) {
            $t = $t->getPrevious();
        }

        do {
            printf(
                '%s%s: %s:%d%s%s%s%s',
                PHP_EOL,
                $first ? 'Location' : 'Caused by',
                $t->getFile(),
                $t->getLine(),
                PHP_EOL,
                PHP_EOL,
                $t->getTraceAsString(),
                PHP_EOL,
            );

            $first = false;
        } while ($t = $t->getPrevious());

        exit(Result::CRASH);
    }

    private function exitWithErrorMessage(string $message): never
    {
        print Version::getVersionString() . PHP_EOL . PHP_EOL . $message . PHP_EOL;

        exit(Result::EXCEPTION);
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
