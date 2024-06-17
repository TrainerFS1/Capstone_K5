<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Output;

<<<<<<< HEAD
use function assert;
use PHPUnit\Event\EventFacadeIsSealedException;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\Event\UnknownSubscriberTypeException;
use PHPUnit\Logging\TeamCity\TeamCityLogger;
use PHPUnit\Logging\TestDox\TestResultCollection;
use PHPUnit\Runner\DirectoryDoesNotExistException;
use PHPUnit\TestRunner\TestResult\TestResult;
use PHPUnit\TextUI\CannotOpenSocketException;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\InvalidSocketException;
use PHPUnit\TextUI\Output\Default\ProgressPrinter\ProgressPrinter as DefaultProgressPrinter;
use PHPUnit\TextUI\Output\Default\ResultPrinter as DefaultResultPrinter;
use PHPUnit\TextUI\Output\Default\UnexpectedOutputPrinter;
use PHPUnit\TextUI\Output\TestDox\ResultPrinter as TestDoxResultPrinter;
=======
use PHPUnit\Logging\TeamCity\TeamCityLogger;
use PHPUnit\Logging\TestDox\TestResultCollection;
use PHPUnit\TestRunner\TestResult\TestResult;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Output\Default\ProgressPrinter\ProgressPrinter as DefaultProgressPrinter;
use PHPUnit\TextUI\Output\Default\ResultPrinter as DefaultResultPrinter;
use PHPUnit\TextUI\Output\TestDox\ResultPrinter as TestDoxResultPrinter;
use PHPUnit\Util\DirectoryDoesNotExistException;
use PHPUnit\Util\InvalidSocketException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use SebastianBergmann\Timer\Duration;
use SebastianBergmann\Timer\ResourceUsageFormatter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
<<<<<<< HEAD
    private static ?Printer $printer                           = null;
    private static ?DefaultResultPrinter $defaultResultPrinter = null;
    private static ?TestDoxResultPrinter $testDoxResultPrinter = null;
    private static ?SummaryPrinter $summaryPrinter             = null;
    private static bool $defaultProgressPrinter                = false;

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function init(Configuration $configuration, bool $extensionReplacesProgressOutput, bool $extensionReplacesResultOutput): Printer
    {
        self::createPrinter($configuration);

        assert(self::$printer !== null);

        if ($configuration->debug()) {
            return self::$printer;
        }

        self::createUnexpectedOutputPrinter();

        if (!$extensionReplacesProgressOutput) {
            self::createProgressPrinter($configuration);
        }

        if (!$extensionReplacesResultOutput) {
            self::createResultPrinter($configuration);
            self::createSummaryPrinter($configuration);
        }

        if ($configuration->outputIsTeamCity()) {
            new TeamCityLogger(
                DefaultPrinter::standardOutput(),
                EventFacade::instance(),
            );
        }

=======
    private static ?Printer $printer                    = null;
    private static ?DefaultResultPrinter $resultPrinter = null;
    private static ?SummaryPrinter $summaryPrinter      = null;
    private static bool $colors                         = false;
    private static bool $defaultProgressPrinter         = false;

    public static function init(Configuration $configuration): Printer
    {
        self::$printer = self::createPrinter($configuration);

        if (self::useDefaultProgressPrinter($configuration)) {
            new DefaultProgressPrinter(
                self::$printer,
                $configuration->colors(),
                $configuration->columns()
            );

            self::$defaultProgressPrinter = true;
        }

        if (self::useDefaultResultPrinter($configuration)) {
            self::$resultPrinter = new DefaultResultPrinter(
                self::$printer,
                $configuration->displayDetailsOnIncompleteTests(),
                $configuration->displayDetailsOnSkippedTests(),
                $configuration->displayDetailsOnTestsThatTriggerDeprecations(),
                $configuration->displayDetailsOnTestsThatTriggerErrors(),
                $configuration->displayDetailsOnTestsThatTriggerNotices(),
                $configuration->displayDetailsOnTestsThatTriggerWarnings(),
                $configuration->reverseDefectList()
            );
        }

        if (self::useDefaultResultPrinter($configuration) || $configuration->outputIsTestDox()) {
            self::$summaryPrinter = new SummaryPrinter(
                self::$printer,
                $configuration->colors(),
            );
        }

        if ($configuration->outputIsTeamCity()) {
            new TeamCityLogger(DefaultPrinter::standardOutput());
        }

        self::$colors = $configuration->colors();

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return self::$printer;
    }

    /**
     * @psalm-param ?array<string, TestResultCollection> $testDoxResult
     */
    public static function printResult(TestResult $result, ?array $testDoxResult, Duration $duration): void
    {
<<<<<<< HEAD
        assert(self::$printer !== null);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($result->numberOfTestsRun() > 0) {
            if (self::$defaultProgressPrinter) {
                self::$printer->print(PHP_EOL . PHP_EOL);
            }

            self::$printer->print((new ResourceUsageFormatter)->resourceUsage($duration) . PHP_EOL . PHP_EOL);
        }

<<<<<<< HEAD
        if (self::$testDoxResultPrinter !== null && $testDoxResult !== null) {
            self::$testDoxResultPrinter->print($testDoxResult);
        }

        if (self::$defaultResultPrinter !== null) {
            self::$defaultResultPrinter->print($result);
=======
        if (self::$resultPrinter !== null) {
            self::$resultPrinter->print($result);
        } elseif ($testDoxResult !== null) {
            (new TestDoxResultPrinter(self::$printer, self::$colors))->print(
                $testDoxResult,
                $result
            );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if (self::$summaryPrinter !== null) {
            self::$summaryPrinter->print($result);
        }
    }

    /**
<<<<<<< HEAD
     * @throws CannotOpenSocketException
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws DirectoryDoesNotExistException
     * @throws InvalidSocketException
     */
    public static function printerFor(string $target): Printer
    {
        if ($target === 'php://stdout') {
            if (!self::$printer instanceof NullPrinter) {
                return self::$printer;
            }

            return DefaultPrinter::standardOutput();
        }

        return DefaultPrinter::from($target);
    }

<<<<<<< HEAD
    private static function createPrinter(Configuration $configuration): void
    {
        $printerNeeded = false;

        if ($configuration->debug()) {
            $printerNeeded = true;
        }

        if ($configuration->outputIsTeamCity()) {
            $printerNeeded = true;
        }

        if ($configuration->outputIsTestDox()) {
            $printerNeeded = true;
        }

        if (!$configuration->noOutput() && !$configuration->noProgress()) {
            $printerNeeded = true;
        }

        if (!$configuration->noOutput() && !$configuration->noResults()) {
            $printerNeeded = true;
        }

        if ($printerNeeded) {
            if ($configuration->outputToStandardErrorStream()) {
                self::$printer = DefaultPrinter::standardError();

                return;
            }

            self::$printer = DefaultPrinter::standardOutput();

            return;
        }

        self::$printer = new NullPrinter;
    }

    private static function createProgressPrinter(Configuration $configuration): void
    {
        assert(self::$printer !== null);

        if (!self::useDefaultProgressPrinter($configuration)) {
            return;
        }

        new DefaultProgressPrinter(
            self::$printer,
            EventFacade::instance(),
            $configuration->colors(),
            $configuration->columns(),
            $configuration->source(),
        );

        self::$defaultProgressPrinter = true;
=======
    private static function createPrinter(Configuration $configuration): Printer
    {
        if (self::useDefaultProgressPrinter($configuration) ||
            self::useDefaultResultPrinter($configuration) ||
            $configuration->outputIsTestDox()) {
            if ($configuration->outputToStandardErrorStream()) {
                return DefaultPrinter::standardError();
            }

            return DefaultPrinter::standardOutput();
        }

        return new NullPrinter;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    private static function useDefaultProgressPrinter(Configuration $configuration): bool
    {
        if ($configuration->noOutput()) {
            return false;
        }

        if ($configuration->noProgress()) {
            return false;
        }

        if ($configuration->outputIsTeamCity()) {
            return false;
        }

        return true;
    }

<<<<<<< HEAD
    private static function createResultPrinter(Configuration $configuration): void
    {
        assert(self::$printer !== null);

        if ($configuration->outputIsTestDox()) {
            self::$defaultResultPrinter = new DefaultResultPrinter(
                self::$printer,
                true,
                true,
                true,
                false,
                false,
                true,
                false,
                false,
                $configuration->displayDetailsOnTestsThatTriggerDeprecations(),
                $configuration->displayDetailsOnTestsThatTriggerErrors(),
                $configuration->displayDetailsOnTestsThatTriggerNotices(),
                $configuration->displayDetailsOnTestsThatTriggerWarnings(),
                $configuration->reverseDefectList(),
            );
        }

        if ($configuration->outputIsTestDox()) {
            self::$testDoxResultPrinter = new TestDoxResultPrinter(
                self::$printer,
                $configuration->colors(),
            );
        }

        if ($configuration->noOutput() || $configuration->noResults()) {
            return;
        }

        if (self::$defaultResultPrinter !== null) {
            return;
        }

        self::$defaultResultPrinter = new DefaultResultPrinter(
            self::$printer,
            true,
            true,
            true,
            true,
            true,
            true,
            $configuration->displayDetailsOnIncompleteTests(),
            $configuration->displayDetailsOnSkippedTests(),
            $configuration->displayDetailsOnTestsThatTriggerDeprecations(),
            $configuration->displayDetailsOnTestsThatTriggerErrors(),
            $configuration->displayDetailsOnTestsThatTriggerNotices(),
            $configuration->displayDetailsOnTestsThatTriggerWarnings(),
            $configuration->reverseDefectList(),
        );
    }

    private static function createSummaryPrinter(Configuration $configuration): void
    {
        assert(self::$printer !== null);

        if (($configuration->noOutput() || $configuration->noResults()) &&
            !($configuration->outputIsTeamCity() || $configuration->outputIsTestDox())) {
            return;
        }

        self::$summaryPrinter = new SummaryPrinter(
            self::$printer,
            $configuration->colors(),
        );
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    private static function createUnexpectedOutputPrinter(): void
    {
        assert(self::$printer !== null);

        new UnexpectedOutputPrinter(self::$printer, EventFacade::instance());
=======
    private static function useDefaultResultPrinter(Configuration $configuration): bool
    {
        if ($configuration->noOutput()) {
            return false;
        }

        if ($configuration->noResults()) {
            return false;
        }

        if ($configuration->outputIsTeamCity()) {
            return false;
        }

        if ($configuration->outputIsTestDox()) {
            return false;
        }

        return true;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
