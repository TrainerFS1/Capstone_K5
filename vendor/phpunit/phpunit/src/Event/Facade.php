<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event;

<<<<<<< HEAD
use function gc_status;
use PHPUnit\Event\Telemetry\HRTime;
use PHPUnit\Event\Telemetry\Php81GarbageCollectorStatusProvider;
use PHPUnit\Event\Telemetry\Php83GarbageCollectorStatusProvider;
=======
use PHPUnit\Event\Telemetry\HRTime;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
<<<<<<< HEAD
    private static ?self $instance = null;
    private Emitter $emitter;
    private ?TypeMap $typeMap                         = null;
    private ?DeferringDispatcher $deferringDispatcher = null;
    private bool $sealed                              = false;

    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
=======
    private static ?TypeMap $typeMap                         = null;
    private static ?Emitter $emitter                         = null;
    private static ?Emitter $suspended                       = null;
    private static ?DeferringDispatcher $deferringDispatcher = null;
    private static bool $sealed                              = false;

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function registerSubscribers(Subscriber ...$subscribers): void
    {
        foreach ($subscribers as $subscriber) {
            self::registerSubscriber($subscriber);
        }
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function registerSubscriber(Subscriber $subscriber): void
    {
        if (self::$sealed) {
            throw new EventFacadeIsSealedException;
        }

        self::deferredDispatcher()->registerSubscriber($subscriber);
    }

    /**
     * @throws EventFacadeIsSealedException
     */
    public static function registerTracer(Tracer\Tracer $tracer): void
    {
        if (self::$sealed) {
            throw new EventFacadeIsSealedException;
        }

        self::deferredDispatcher()->registerTracer($tracer);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public static function emitter(): Emitter
    {
<<<<<<< HEAD
        return self::instance()->emitter;
    }

    public function __construct()
    {
        $this->emitter = $this->createDispatchingEmitter();
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscribers(Subscriber ...$subscribers): void
    {
        foreach ($subscribers as $subscriber) {
            $this->registerSubscriber($subscriber);
        }
    }

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(Subscriber $subscriber): void
    {
        if ($this->sealed) {
            throw new EventFacadeIsSealedException;
        }

        $this->deferredDispatcher()->registerSubscriber($subscriber);
    }

    /**
     * @throws EventFacadeIsSealedException
     */
    public function registerTracer(Tracer\Tracer $tracer): void
    {
        if ($this->sealed) {
            throw new EventFacadeIsSealedException;
        }

        $this->deferredDispatcher()->registerTracer($tracer);
    }

    /**
     * @codeCoverageIgnore
     *
     * @noinspection PhpUnused
     */
    public function initForIsolation(HRTime $offset, bool $exportObjects): CollectingDispatcher
    {
        $dispatcher = new CollectingDispatcher;

        $this->emitter = new DispatchingEmitter(
            $dispatcher,
            new Telemetry\System(
                new Telemetry\SystemStopWatchWithOffset($offset),
                new Telemetry\SystemMemoryMeter,
                $this->garbageCollectorStatusProvider(),
            ),
        );

        if ($exportObjects) {
            $this->emitter->exportObjects();
        }

        $this->sealed = true;
=======
        if (self::$emitter === null) {
            self::$emitter = self::createDispatchingEmitter();
        }

        return self::$emitter;
    }

    /** @noinspection PhpUnused */
    public static function initForIsolation(HRTime $offset): CollectingDispatcher
    {
        $dispatcher = new CollectingDispatcher;

        self::$emitter = new DispatchingEmitter(
            $dispatcher,
            new Telemetry\System(
                new Telemetry\SystemStopWatchWithOffset($offset),
                new Telemetry\SystemMemoryMeter
            )
        );

        self::$sealed = true;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $dispatcher;
    }

<<<<<<< HEAD
    public function forward(EventCollection $events): void
    {
        $dispatcher = $this->deferredDispatcher();
=======
    public static function forward(EventCollection $events): void
    {
        if (self::$suspended !== null) {
            return;
        }

        $dispatcher = self::deferredDispatcher();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        foreach ($events as $event) {
            $dispatcher->dispatch($event);
        }
    }

<<<<<<< HEAD
    public function seal(): void
    {
        $this->deferredDispatcher()->flush();

        $this->sealed = true;

        $this->emitter->testRunnerEventFacadeSealed();
    }

    private function createDispatchingEmitter(): DispatchingEmitter
    {
        return new DispatchingEmitter(
            $this->deferredDispatcher(),
            $this->createTelemetrySystem(),
        );
    }

    private function createTelemetrySystem(): Telemetry\System
    {
        return new Telemetry\System(
            new Telemetry\SystemStopWatch,
            new Telemetry\SystemMemoryMeter,
            $this->garbageCollectorStatusProvider(),
        );
    }

    private function deferredDispatcher(): DeferringDispatcher
    {
        if ($this->deferringDispatcher === null) {
            $this->deferringDispatcher = new DeferringDispatcher(
                new DirectDispatcher($this->typeMap()),
            );
        }

        return $this->deferringDispatcher;
    }

    private function typeMap(): TypeMap
    {
        if ($this->typeMap === null) {
            $typeMap = new TypeMap;

            $this->registerDefaultTypes($typeMap);

            $this->typeMap = $typeMap;
        }

        return $this->typeMap;
    }

    private function registerDefaultTypes(TypeMap $typeMap): void
=======
    public static function seal(): void
    {
        self::$deferringDispatcher->flush();

        self::$sealed = true;

        self::emitter()->testRunnerEventFacadeSealed();
    }

    private static function createDispatchingEmitter(): DispatchingEmitter
    {
        return new DispatchingEmitter(
            self::deferredDispatcher(),
            self::createTelemetrySystem()
        );
    }

    private static function createTelemetrySystem(): Telemetry\System
    {
        return new Telemetry\System(
            new Telemetry\SystemStopWatch,
            new Telemetry\SystemMemoryMeter
        );
    }

    private static function deferredDispatcher(): DeferringDispatcher
    {
        if (self::$deferringDispatcher === null) {
            self::$deferringDispatcher = new DeferringDispatcher(
                new DirectDispatcher(self::typeMap())
            );
        }

        return self::$deferringDispatcher;
    }

    private static function typeMap(): TypeMap
    {
        if (self::$typeMap === null) {
            $typeMap = new TypeMap;

            self::registerDefaultTypes($typeMap);

            self::$typeMap = $typeMap;
        }

        return self::$typeMap;
    }

    private static function registerDefaultTypes(TypeMap $typeMap): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $defaultEvents = [
            Application\Started::class,
            Application\Finished::class,

<<<<<<< HEAD
            Test\DataProviderMethodCalled::class,
            Test\DataProviderMethodFinished::class,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            Test\MarkedIncomplete::class,
            Test\AfterLastTestMethodCalled::class,
            Test\AfterLastTestMethodFinished::class,
            Test\AfterTestMethodCalled::class,
            Test\AfterTestMethodFinished::class,
            Test\AssertionSucceeded::class,
            Test\AssertionFailed::class,
            Test\BeforeFirstTestMethodCalled::class,
            Test\BeforeFirstTestMethodErrored::class,
            Test\BeforeFirstTestMethodFinished::class,
            Test\BeforeTestMethodCalled::class,
            Test\BeforeTestMethodFinished::class,
            Test\ComparatorRegistered::class,
            Test\ConsideredRisky::class,
            Test\DeprecationTriggered::class,
            Test\Errored::class,
            Test\ErrorTriggered::class,
            Test\Failed::class,
            Test\Finished::class,
            Test\NoticeTriggered::class,
            Test\Passed::class,
            Test\PhpDeprecationTriggered::class,
            Test\PhpNoticeTriggered::class,
            Test\PhpunitDeprecationTriggered::class,
            Test\PhpunitErrorTriggered::class,
            Test\PhpunitWarningTriggered::class,
            Test\PhpWarningTriggered::class,
            Test\PostConditionCalled::class,
            Test\PostConditionFinished::class,
            Test\PreConditionCalled::class,
            Test\PreConditionFinished::class,
            Test\PreparationStarted::class,
            Test\Prepared::class,
<<<<<<< HEAD
            Test\PreparationFailed::class,
            Test\PrintedUnexpectedOutput::class,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            Test\Skipped::class,
            Test\WarningTriggered::class,

            Test\MockObjectCreated::class,
            Test\MockObjectForAbstractClassCreated::class,
            Test\MockObjectForIntersectionOfInterfacesCreated::class,
            Test\MockObjectForTraitCreated::class,
            Test\MockObjectFromWsdlCreated::class,
            Test\PartialMockObjectCreated::class,
            Test\TestProxyCreated::class,
            Test\TestStubCreated::class,
            Test\TestStubForIntersectionOfInterfacesCreated::class,

            TestRunner\BootstrapFinished::class,
            TestRunner\Configured::class,
            TestRunner\EventFacadeSealed::class,
<<<<<<< HEAD
            TestRunner\ExecutionAborted::class,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            TestRunner\ExecutionFinished::class,
            TestRunner\ExecutionStarted::class,
            TestRunner\ExtensionLoadedFromPhar::class,
            TestRunner\ExtensionBootstrapped::class,
            TestRunner\Finished::class,
            TestRunner\Started::class,
            TestRunner\DeprecationTriggered::class,
            TestRunner\WarningTriggered::class,
<<<<<<< HEAD
            TestRunner\GarbageCollectionDisabled::class,
            TestRunner\GarbageCollectionTriggered::class,
            TestRunner\GarbageCollectionEnabled::class,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            TestSuite\Filtered::class,
            TestSuite\Finished::class,
            TestSuite\Loaded::class,
            TestSuite\Skipped::class,
            TestSuite\Sorted::class,
            TestSuite\Started::class,
        ];

        foreach ($defaultEvents as $eventClass) {
            $typeMap->addMapping(
                $eventClass . 'Subscriber',
<<<<<<< HEAD
                $eventClass,
            );
        }
    }

    private function garbageCollectorStatusProvider(): Telemetry\GarbageCollectorStatusProvider
    {
        if (!isset(gc_status()['running'])) {
            // @codeCoverageIgnoreStart
            return new Php81GarbageCollectorStatusProvider;
            // @codeCoverageIgnoreEnd
        }

        return new Php83GarbageCollectorStatusProvider;
    }
=======
                $eventClass
            );
        }
    }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
