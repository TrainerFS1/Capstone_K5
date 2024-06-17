<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestRunner\TestResult;

use PHPUnit\Event\EventFacadeIsSealedException;
<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\Event\UnknownSubscriberTypeException;
use PHPUnit\TextUI\Configuration\Registry as ConfigurationRegistry;
=======
use PHPUnit\Event\UnknownSubscriberTypeException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use PHPUnit\Event\UnknownSubscriberTypeException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
    private static ?Collector $collector = null;

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function init(): void
    {
        self::collector();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function result(): TestResult
    {
        return self::collector()->result();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function shouldStop(): bool
    {
        $configuration = ConfigurationRegistry::get();
        $collector     = self::collector();

        if (($configuration->stopOnDefect() || $configuration->stopOnError()) && $collector->hasErroredTests()) {
            return true;
        }

        if (($configuration->stopOnDefect() || $configuration->stopOnFailure()) && $collector->hasFailedTests()) {
            return true;
        }

        if (($configuration->stopOnDefect() || $configuration->stopOnWarning()) && $collector->hasWarnings()) {
            return true;
        }

        if (($configuration->stopOnDefect() || $configuration->stopOnRisky()) && $collector->hasRiskyTests()) {
            return true;
        }

        if ($configuration->stopOnDeprecation() && $collector->hasDeprecations()) {
            return true;
        }

        if ($configuration->stopOnNotice() && $collector->hasNotices()) {
            return true;
        }

        if ($configuration->stopOnIncomplete() && $collector->hasIncompleteTests()) {
            return true;
        }

        if ($configuration->stopOnSkipped() && $collector->hasSkippedTests()) {
            return true;
        }

        return false;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public static function hasTestErroredEvents(): bool
    {
        return self::collector()->hasTestErroredEvents();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function hasTestFailedEvents(): bool
    {
        return self::collector()->hasTestFailedEvents();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function hasWarningEvents(): bool
    {
        return self::collector()->hasWarningEvents();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function hasTestConsideredRiskyEvents(): bool
    {
        return self::collector()->hasTestConsideredRiskyEvents();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function hasTestSkippedEvents(): bool
    {
        return self::collector()->hasTestSkippedEvents();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function hasTestMarkedIncompleteEvents(): bool
    {
        return self::collector()->hasTestMarkedIncompleteEvents();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    private static function collector(): Collector
    {
        if (self::$collector === null) {
<<<<<<< HEAD
<<<<<<< HEAD
            $configuration = ConfigurationRegistry::get();

            self::$collector = new Collector(
                EventFacade::instance(),
                $configuration->source(),
            );
=======
            self::$collector = new Collector;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            self::$collector = new Collector;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return self::$collector;
    }
}
