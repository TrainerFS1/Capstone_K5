<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Extension;

use PHPUnit\Event\EventFacadeIsSealedException;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\Event\Subscriber;
use PHPUnit\Event\Tracer\Tracer;
use PHPUnit\Event\UnknownSubscriberTypeException;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
<<<<<<< HEAD
    private bool $replacesOutput                 = false;
    private bool $replacesProgressOutput         = false;
    private bool $replacesResultOutput           = false;
    private bool $requiresCodeCoverageCollection = false;
    private bool $requiresExportOfObjects        = false;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscribers(Subscriber ...$subscribers): void
    {
<<<<<<< HEAD
        EventFacade::instance()->registerSubscribers(...$subscribers);
=======
        EventFacade::registerSubscribers(...$subscribers);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(Subscriber $subscriber): void
    {
<<<<<<< HEAD
        EventFacade::instance()->registerSubscriber($subscriber);
=======
        EventFacade::registerSubscriber($subscriber);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @throws EventFacadeIsSealedException
     */
    public function registerTracer(Tracer $tracer): void
    {
<<<<<<< HEAD
        EventFacade::instance()->registerTracer($tracer);
    }

    public function replaceOutput(): void
    {
        $this->replacesOutput = true;
    }

    public function replacesOutput(): bool
    {
        return $this->replacesOutput;
    }

    public function replaceProgressOutput(): void
    {
        $this->replacesProgressOutput = true;
    }

    public function replacesProgressOutput(): bool
    {
        return $this->replacesOutput || $this->replacesProgressOutput;
    }

    public function replaceResultOutput(): void
    {
        $this->replacesResultOutput = true;
    }

    public function replacesResultOutput(): bool
    {
        return $this->replacesOutput || $this->replacesResultOutput;
    }

    public function requireCodeCoverageCollection(): void
    {
        $this->requiresCodeCoverageCollection = true;
    }

    public function requiresCodeCoverageCollection(): bool
    {
        return $this->requiresCodeCoverageCollection;
    }

    /**
     * @deprecated
     */
    public function requireExportOfObjects(): void
    {
        $this->requiresExportOfObjects = true;
    }

    /**
     * @deprecated
     */
    public function requiresExportOfObjects(): bool
    {
        return $this->requiresExportOfObjects;
=======
        EventFacade::registerTracer($tracer);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
