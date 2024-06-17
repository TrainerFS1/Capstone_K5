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

use function sprintf;
use PHPUnit\TestRunner\TestResult\TestResult;
use PHPUnit\Util\Color;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SummaryPrinter
{
    private readonly Printer $printer;
    private readonly bool $colors;
    private bool $countPrinted = false;

    public function __construct(Printer $printer, bool $colors)
    {
        $this->printer = $printer;
        $this->colors  = $colors;
    }

    public function print(TestResult $result): void
    {
        if ($result->numberOfTestsRun() === 0) {
            $this->printWithColor(
                'fg-black, bg-yellow',
<<<<<<< HEAD
<<<<<<< HEAD
                'No tests executed!',
=======
                'No tests executed!'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                'No tests executed!'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return;
        }

        if ($result->wasSuccessfulAndNoTestHasIssues() &&
            !$result->hasTestSuiteSkippedEvents() &&
            !$result->hasTestSkippedEvents()) {
            $this->printWithColor(
                'fg-black, bg-green',
                sprintf(
                    'OK (%d test%s, %d assertion%s)',
                    $result->numberOfTestsRun(),
                    $result->numberOfTestsRun() === 1 ? '' : 's',
                    $result->numberOfAssertions(),
<<<<<<< HEAD
<<<<<<< HEAD
                    $result->numberOfAssertions() === 1 ? '' : 's',
                ),
            );

            $this->printNumberOfIssuesIgnoredByBaseline($result);

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $result->numberOfAssertions() === 1 ? '' : 's'
                )
            );

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return;
        }

        $color = 'fg-black, bg-yellow';

        if ($result->wasSuccessful()) {
            if (!$result->hasTestsWithIssues()) {
                $this->printWithColor(
                    $color,
<<<<<<< HEAD
<<<<<<< HEAD
                    'OK, but some tests were skipped!',
=======
                    'OK, but some tests were skipped!'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'OK, but some tests were skipped!'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            } else {
                $this->printWithColor(
                    $color,
<<<<<<< HEAD
<<<<<<< HEAD
                    'OK, but there were issues!',
                );
            }
        } else {
            if ($result->hasTestErroredEvents() || $result->hasTestTriggeredPhpunitErrorEvents()) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    'OK, but some tests have issues!'
                );
            }
        } else {
            if ($result->hasTestErroredEvents()) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $color = 'fg-white, bg-red';

                $this->printWithColor(
                    $color,
<<<<<<< HEAD
<<<<<<< HEAD
                    'ERRORS!',
=======
                    'ERRORS!'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'ERRORS!'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            } elseif ($result->hasTestFailedEvents()) {
                $color = 'fg-white, bg-red';

                $this->printWithColor(
                    $color,
<<<<<<< HEAD
<<<<<<< HEAD
                    'FAILURES!',
                );
            } elseif ($result->hasWarnings()) {
                $this->printWithColor(
                    $color,
                    'WARNINGS!',
                );
            } elseif ($result->hasDeprecations()) {
                $this->printWithColor(
                    $color,
                    'DEPRECATIONS!',
                );
            } elseif ($result->hasNotices()) {
                $this->printWithColor(
                    $color,
                    'NOTICES!',
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    'FAILURES!'
                );
            } elseif ($result->hasWarningEvents()) {
                $this->printWithColor(
                    $color,
                    'WARNINGS!'
                );
            } elseif ($result->hasDeprecationEvents()) {
                $this->printWithColor(
                    $color,
                    'DEPRECATIONS!'
                );
            } elseif ($result->hasNoticeEvents()) {
                $this->printWithColor(
                    $color,
                    'NOTICES!'
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
        }

        $this->printCountString($result->numberOfTestsRun(), 'Tests', $color, true);
        $this->printCountString($result->numberOfAssertions(), 'Assertions', $color, true);
<<<<<<< HEAD
<<<<<<< HEAD
        $this->printCountString($result->numberOfErrors(), 'Errors', $color);
        $this->printCountString($result->numberOfTestFailedEvents(), 'Failures', $color);
        $this->printCountString($result->numberOfWarnings(), 'Warnings', $color);
        $this->printCountString($result->numberOfDeprecations(), 'Deprecations', $color);
        $this->printCountString($result->numberOfNotices(), 'Notices', $color);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->printCountString($result->numberOfTestErroredEvents() + $result->numberOfTestsWithTestTriggeredErrorEvents(), 'Errors', $color);
        $this->printCountString($result->numberOfTestFailedEvents(), 'Failures', $color);
        $this->printCountString($result->numberOfWarningEvents(), 'Warnings', $color);
        $this->printCountString($result->numberOfDeprecationEvents(), 'Deprecations', $color);
        $this->printCountString($result->numberOfNoticeEvents(), 'Notices', $color);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->printCountString($result->numberOfTestSuiteSkippedEvents() + $result->numberOfTestSkippedEvents(), 'Skipped', $color);
        $this->printCountString($result->numberOfTestMarkedIncompleteEvents(), 'Incomplete', $color);
        $this->printCountString($result->numberOfTestsWithTestConsideredRiskyEvents(), 'Risky', $color);
        $this->printWithColor($color, '.');
<<<<<<< HEAD
<<<<<<< HEAD

        $this->printNumberOfIssuesIgnoredByBaseline($result);
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    private function printCountString(int $count, string $name, string $color, bool $always = false): void
    {
        if ($always || $count > 0) {
            $this->printWithColor(
                $color,
                sprintf(
                    '%s%s: %d',
                    $this->countPrinted ? ', ' : '',
                    $name,
<<<<<<< HEAD
<<<<<<< HEAD
                    $count,
                ),
                false,
=======
                    $count
                ),
                false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $count
                ),
                false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $this->countPrinted = true;
        }
    }

    private function printWithColor(string $color, string $buffer, bool $lf = true): void
    {
        if ($this->colors) {
            $buffer = Color::colorizeTextBox($color, $buffer);
        }

        $this->printer->print($buffer);

        if ($lf) {
            $this->printer->print(PHP_EOL);
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD

    private function printNumberOfIssuesIgnoredByBaseline(TestResult $result): void
    {
        if ($result->hasIssuesIgnoredByBaseline()) {
            $this->printer->print(
                sprintf(
                    '%s%d issue%s %s ignored by baseline.%s',
                    PHP_EOL,
                    $result->numberOfIssuesIgnoredByBaseline(),
                    $result->numberOfIssuesIgnoredByBaseline() > 1 ? 's' : '',
                    $result->numberOfIssuesIgnoredByBaseline() > 1 ? 'were' : 'was',
                    PHP_EOL,
                ),
            );
        }
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
