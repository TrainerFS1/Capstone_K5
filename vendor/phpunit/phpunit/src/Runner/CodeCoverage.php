<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

use function file_put_contents;
use function sprintf;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException;
<<<<<<< HEAD
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\TestCase;
use PHPUnit\TextUI\Configuration\CodeCoverageFilterRegistry;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Output\Printer;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use SebastianBergmann\CodeCoverage\Exception as CodeCoverageException;
use SebastianBergmann\CodeCoverage\Filter;
use SebastianBergmann\CodeCoverage\Report\Clover as CloverReport;
use SebastianBergmann\CodeCoverage\Report\Cobertura as CoberturaReport;
use SebastianBergmann\CodeCoverage\Report\Crap4j as Crap4jReport;
use SebastianBergmann\CodeCoverage\Report\Html\Colors;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use SebastianBergmann\CodeCoverage\Report\Html\Facade as HtmlReport;
use SebastianBergmann\CodeCoverage\Report\PHP as PhpReport;
use SebastianBergmann\CodeCoverage\Report\Text as TextReport;
use SebastianBergmann\CodeCoverage\Report\Thresholds;
use SebastianBergmann\CodeCoverage\Report\Xml\Facade as XmlReport;
use SebastianBergmann\CodeCoverage\Test\TestSize\TestSize;
use SebastianBergmann\CodeCoverage\Test\TestStatus\TestStatus;
use SebastianBergmann\Comparator\Comparator;
use SebastianBergmann\Timer\NoActiveTimerException;
use SebastianBergmann\Timer\Timer;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
 *
 * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class CodeCoverage
{
    private static ?self $instance                                      = null;
    private ?\SebastianBergmann\CodeCoverage\CodeCoverage $codeCoverage = null;
    private ?Driver $driver                                             = null;
    private bool $collecting                                            = false;
    private ?TestCase $test                                             = null;
    private ?Timer $timer                                               = null;

<<<<<<< HEAD
    /**
     * @psalm-var array<string,list<int>>
     */
    private array $linesToBeIgnored = [];

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

<<<<<<< HEAD
    public function init(Configuration $configuration, CodeCoverageFilterRegistry $codeCoverageFilterRegistry, bool $extensionRequiresCodeCoverageCollection): void
    {
        $codeCoverageFilterRegistry->init($configuration);

        if (!$configuration->hasCoverageReport() && !$extensionRequiresCodeCoverageCollection) {
=======
    public function init(Configuration $configuration, CodeCoverageFilterRegistry $codeCoverageFilterRegistry): void
    {
        $codeCoverageFilterRegistry->init($configuration);

        if (!$configuration->hasCoverageReport()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return;
        }

        $this->activate($codeCoverageFilterRegistry->get(), $configuration->pathCoverage());

        if (!$this->isActive()) {
            return;
        }

        if ($configuration->hasCoverageCacheDirectory()) {
            $this->codeCoverage()->cacheStaticAnalysis($configuration->coverageCacheDirectory());
        }

        $this->codeCoverage()->excludeSubclassesOfThisClassFromUnintentionallyCoveredCodeCheck(Comparator::class);

        if ($configuration->strictCoverage()) {
            $this->codeCoverage()->enableCheckForUnintentionallyCoveredCode();
        }

        if ($configuration->ignoreDeprecatedCodeUnitsFromCodeCoverage()) {
            $this->codeCoverage()->ignoreDeprecatedCode();
        } else {
            $this->codeCoverage()->doNotIgnoreDeprecatedCode();
        }

        if ($configuration->disableCodeCoverageIgnore()) {
            $this->codeCoverage()->disableAnnotationsForIgnoringCode();
        } else {
            $this->codeCoverage()->enableAnnotationsForIgnoringCode();
        }

        if ($configuration->includeUncoveredFiles()) {
            $this->codeCoverage()->includeUncoveredFiles();
        } else {
            $this->codeCoverage()->excludeUncoveredFiles();
        }

        if ($codeCoverageFilterRegistry->get()->isEmpty()) {
            if (!$codeCoverageFilterRegistry->configured()) {
                EventFacade::emitter()->testRunnerTriggeredWarning(
<<<<<<< HEAD
                    'No filter is configured, code coverage will not be processed',
                );
            } else {
                EventFacade::emitter()->testRunnerTriggeredWarning(
                    'Incorrect filter configuration, code coverage will not be processed',
=======
                    'No filter is configured, code coverage will not be processed'
                );
            } else {
                EventFacade::emitter()->testRunnerTriggeredWarning(
                    'Incorrect filter configuration, code coverage will not be processed'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $this->deactivate();
        }
    }

    /**
     * @psalm-assert-if-true !null $this->instance
     */
    public function isActive(): bool
    {
        return $this->codeCoverage !== null;
    }

    public function codeCoverage(): \SebastianBergmann\CodeCoverage\CodeCoverage
    {
        return $this->codeCoverage;
    }

    public function driver(): Driver
    {
        return $this->driver;
    }

    /**
     * @throws MoreThanOneDataSetFromDataProviderException
<<<<<<< HEAD
=======
     * @throws NoDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function start(TestCase $test): void
    {
        if ($this->collecting) {
            return;
        }

        $size = TestSize::unknown();

        if ($test->size()->isSmall()) {
            $size = TestSize::small();
        } elseif ($test->size()->isMedium()) {
            $size = TestSize::medium();
        } elseif ($test->size()->isLarge()) {
            $size = TestSize::large();
        }

        $this->test = $test;

        $this->codeCoverage->start(
            $test->valueObjectForEvents()->id(),
<<<<<<< HEAD
            $size,
=======
            $size
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->collecting = true;
    }

    public function stop(bool $append = true, array|false $linesToBeCovered = [], array $linesToBeUsed = []): void
    {
        if (!$this->collecting) {
            return;
        }

        $status = TestStatus::unknown();

        if ($this->test !== null) {
            if ($this->test->status()->isSuccess()) {
                $status = TestStatus::success();
            } else {
                $status = TestStatus::failure();
            }
        }

        /* @noinspection UnusedFunctionResultInspection */
<<<<<<< HEAD
        $this->codeCoverage->stop($append, $status, $linesToBeCovered, $linesToBeUsed, $this->linesToBeIgnored);
=======
        $this->codeCoverage->stop($append, $status, $linesToBeCovered, $linesToBeUsed);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $this->test       = null;
        $this->collecting = false;
    }

    public function deactivate(): void
    {
        $this->driver       = null;
        $this->codeCoverage = null;
        $this->test         = null;
    }

    public function generateReports(Printer $printer, Configuration $configuration): void
    {
        if (!$this->isActive()) {
            return;
        }

<<<<<<< HEAD
        if ($configuration->hasCoveragePhp()) {
            $this->codeCoverageGenerationStart($printer, 'PHP');

            try {
                $writer = new PhpReport;
                $writer->process($this->codeCoverage(), $configuration->coveragePhp());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($configuration->hasCoverageClover()) {
            $this->codeCoverageGenerationStart($printer, 'Clover XML');

            try {
                $writer = new CloverReport;
                $writer->process($this->codeCoverage(), $configuration->coverageClover());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }

        if ($configuration->hasCoverageCobertura()) {
            $this->codeCoverageGenerationStart($printer, 'Cobertura XML');

            try {
                $writer = new CoberturaReport;
                $writer->process($this->codeCoverage(), $configuration->coverageCobertura());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }

        if ($configuration->hasCoverageCrap4j()) {
            $this->codeCoverageGenerationStart($printer, 'Crap4J XML');

            try {
                $writer = new Crap4jReport($configuration->coverageCrap4jThreshold());
                $writer->process($this->codeCoverage(), $configuration->coverageCrap4j());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }

        if ($configuration->hasCoverageHtml()) {
            $this->codeCoverageGenerationStart($printer, 'HTML');

            try {
                $customCssFile = CustomCssFile::default();

                if ($configuration->hasCoverageHtmlCustomCssFile()) {
                    $customCssFile = CustomCssFile::from($configuration->coverageHtmlCustomCssFile());
                }

                $writer = new HtmlReport(
                    sprintf(
                        ' and <a href="https://phpunit.de/">PHPUnit %s</a>',
<<<<<<< HEAD
                        Version::id(),
=======
                        Version::id()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    ),
                    Colors::from(
                        $configuration->coverageHtmlColorSuccessLow(),
                        $configuration->coverageHtmlColorSuccessMedium(),
                        $configuration->coverageHtmlColorSuccessHigh(),
                        $configuration->coverageHtmlColorWarning(),
                        $configuration->coverageHtmlColorDanger(),
                    ),
                    Thresholds::from(
                        $configuration->coverageHtmlLowUpperBound(),
<<<<<<< HEAD
                        $configuration->coverageHtmlHighLowerBound(),
                    ),
                    $customCssFile,
=======
                        $configuration->coverageHtmlHighLowerBound()
                    ),
                    $customCssFile
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                $writer->process($this->codeCoverage(), $configuration->coverageHtml());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }

<<<<<<< HEAD
=======
        if ($configuration->hasCoveragePhp()) {
            $this->codeCoverageGenerationStart($printer, 'PHP');

            try {
                $writer = new PhpReport;
                $writer->process($this->codeCoverage(), $configuration->coveragePhp());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($configuration->hasCoverageText()) {
            $processor = new TextReport(
                Thresholds::default(),
                $configuration->coverageTextShowUncoveredFiles(),
<<<<<<< HEAD
                $configuration->coverageTextShowOnlySummary(),
=======
                $configuration->coverageTextShowOnlySummary()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $textReport = $processor->process($this->codeCoverage(), $configuration->colors());

            if ($configuration->coverageText() === 'php://stdout') {
                $printer->print($textReport);
            } else {
                file_put_contents($configuration->coverageText(), $textReport);
            }
        }

        if ($configuration->hasCoverageXml()) {
            $this->codeCoverageGenerationStart($printer, 'PHPUnit XML');

            try {
                $writer = new XmlReport(Version::id());
                $writer->process($this->codeCoverage(), $configuration->coverageXml());

                $this->codeCoverageGenerationSucceeded($printer);

                unset($writer);
            } catch (CodeCoverageException $e) {
                $this->codeCoverageGenerationFailed($printer, $e);
            }
        }
    }

<<<<<<< HEAD
    /**
     * @psalm-param array<string,list<int>> $linesToBeIgnored
     */
    public function ignoreLines(array $linesToBeIgnored): void
    {
        $this->linesToBeIgnored = $linesToBeIgnored;
    }

    /**
     * @psalm-return array<string,list<int>>
     */
    public function linesToBeIgnored(): array
    {
        return $this->linesToBeIgnored;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function activate(Filter $filter, bool $pathCoverage): void
    {
        try {
            if ($pathCoverage) {
                $this->driver = (new Selector)->forLineAndPathCoverage($filter);
            } else {
                $this->driver = (new Selector)->forLineCoverage($filter);
            }

            $this->codeCoverage = new \SebastianBergmann\CodeCoverage\CodeCoverage(
                $this->driver,
<<<<<<< HEAD
                $filter,
            );
        } catch (CodeCoverageException $e) {
            EventFacade::emitter()->testRunnerTriggeredWarning(
                $e->getMessage(),
=======
                $filter
            );
        } catch (CodeCoverageException $e) {
            EventFacade::emitter()->testRunnerTriggeredWarning(
                $e->getMessage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    private function codeCoverageGenerationStart(Printer $printer, string $format): void
    {
        $printer->print(
            sprintf(
                "\nGenerating code coverage report in %s format ... ",
<<<<<<< HEAD
                $format,
            ),
=======
                $format
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->timer()->start();
    }

    /**
     * @throws NoActiveTimerException
     */
    private function codeCoverageGenerationSucceeded(Printer $printer): void
    {
        $printer->print(
            sprintf(
                "done [%s]\n",
<<<<<<< HEAD
                $this->timer()->stop()->asString(),
            ),
=======
                $this->timer()->stop()->asString()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @throws NoActiveTimerException
     */
    private function codeCoverageGenerationFailed(Printer $printer, CodeCoverageException $e): void
    {
        $printer->print(
            sprintf(
                "failed [%s]\n%s\n",
                $this->timer()->stop()->asString(),
<<<<<<< HEAD
                $e->getMessage(),
            ),
=======
                $e->getMessage()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    private function timer(): Timer
    {
        if ($this->timer === null) {
            $this->timer = new Timer;
        }

        return $this->timer;
    }
}
