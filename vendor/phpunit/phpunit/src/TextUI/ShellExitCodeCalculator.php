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

use PHPUnit\TestRunner\TestResult\TestResult;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ShellExitCodeCalculator
{
<<<<<<< HEAD
    private const SUCCESS_EXIT   = 0;
    private const FAILURE_EXIT   = 1;
    private const EXCEPTION_EXIT = 2;

    public function calculate(bool $failOnDeprecation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnNotice, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, TestResult $result): int
=======
    private const SUCCESS_EXIT = 0;

    private const FAILURE_EXIT = 1;

    private const EXCEPTION_EXIT = 2;

    public function calculate(bool $failOnEmptyTestSuite, bool $failOnRisky, bool $failOnWarning, bool $failOnIncomplete, bool $failOnSkipped, TestResult $result): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $returnCode = self::FAILURE_EXIT;

        if ($result->wasSuccessful()) {
            $returnCode = self::SUCCESS_EXIT;
        }

<<<<<<< HEAD
        if ($failOnEmptyTestSuite && !$result->hasTests()) {
=======
        if ($failOnEmptyTestSuite && $result->numberOfTests() === 0) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $returnCode = self::FAILURE_EXIT;
        }

        if ($result->wasSuccessfulIgnoringPhpunitWarnings()) {
<<<<<<< HEAD
            if ($failOnDeprecation && $result->hasDeprecations()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnIncomplete && $result->hasIncompleteTests()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnNotice && $result->hasNotices()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnRisky && $result->hasRiskyTests()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnSkipped && $result->hasSkippedTests()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnWarning && $result->hasWarnings()) {
=======
            if ($failOnRisky && $result->hasTestConsideredRiskyEvents()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnWarning && $result->hasWarningEvents()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnIncomplete && $result->hasTestMarkedIncompleteEvents()) {
                $returnCode = self::FAILURE_EXIT;
            }

            if ($failOnSkipped && $result->hasTestSkippedEvents()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $returnCode = self::FAILURE_EXIT;
            }
        }

<<<<<<< HEAD
        if ($result->hasErrors()) {
=======
        if ($result->hasTestErroredEvents()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $returnCode = self::EXCEPTION_EXIT;
        }

        return $returnCode;
    }
}
