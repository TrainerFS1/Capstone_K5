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

<<<<<<< HEAD
<<<<<<< HEAD
use function array_values;
use function assert;
use function implode;
=======
use function assert;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use function assert;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function str_contains;
use PHPUnit\Event\Code\TestMethod;
use PHPUnit\Event\EventFacadeIsSealedException;
use PHPUnit\Event\Facade;
use PHPUnit\Event\Test\BeforeFirstTestMethodErrored;
use PHPUnit\Event\Test\ConsideredRisky;
use PHPUnit\Event\Test\DeprecationTriggered;
use PHPUnit\Event\Test\Errored;
use PHPUnit\Event\Test\ErrorTriggered;
use PHPUnit\Event\Test\Failed;
use PHPUnit\Event\Test\Finished;
use PHPUnit\Event\Test\MarkedIncomplete;
use PHPUnit\Event\Test\NoticeTriggered;
use PHPUnit\Event\Test\PhpDeprecationTriggered;
use PHPUnit\Event\Test\PhpNoticeTriggered;
use PHPUnit\Event\Test\PhpunitDeprecationTriggered;
use PHPUnit\Event\Test\PhpunitErrorTriggered;
use PHPUnit\Event\Test\PhpunitWarningTriggered;
use PHPUnit\Event\Test\PhpWarningTriggered;
use PHPUnit\Event\Test\Skipped as TestSkipped;
use PHPUnit\Event\Test\WarningTriggered;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Event\TestRunner\DeprecationTriggered as TestRunnerDeprecationTriggered;
use PHPUnit\Event\TestRunner\ExecutionStarted;
use PHPUnit\Event\TestRunner\WarningTriggered as TestRunnerWarningTriggered;
use PHPUnit\Event\TestSuite\Finished as TestSuiteFinished;
use PHPUnit\Event\TestSuite\Skipped as TestSuiteSkipped;
use PHPUnit\Event\TestSuite\Started as TestSuiteStarted;
use PHPUnit\Event\TestSuite\TestSuiteForTestClass;
use PHPUnit\Event\TestSuite\TestSuiteForTestMethodWithDataProvider;
use PHPUnit\Event\UnknownSubscriberTypeException;
<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\TestRunner\TestResult\Issues\Issue;
use PHPUnit\TextUI\Configuration\Source;
use PHPUnit\TextUI\Configuration\SourceFilter;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Collector
{
<<<<<<< HEAD
<<<<<<< HEAD
    private readonly Source $source;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private int $numberOfTests                       = 0;
    private int $numberOfTestsRun                    = 0;
    private int $numberOfAssertions                  = 0;
    private bool $prepared                           = false;
    private bool $currentTestSuiteForTestClassFailed = false;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-var non-negative-int
     */
    private int $numberOfIssuesIgnoredByBaseline = 0;

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-var list<BeforeFirstTestMethodErrored|Errored>
     */
    private array $testErroredEvents = [];

    /**
     * @psalm-var list<Failed>
     */
    private array $testFailedEvents = [];

    /**
     * @psalm-var list<MarkedIncomplete>
     */
    private array $testMarkedIncompleteEvents = [];

    /**
     * @psalm-var list<TestSuiteSkipped>
     */
    private array $testSuiteSkippedEvents = [];

    /**
     * @psalm-var list<TestSkipped>
     */
    private array $testSkippedEvents = [];

    /**
     * @psalm-var array<string,list<ConsideredRisky>>
     */
    private array $testConsideredRiskyEvents = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-var array<string,list<DeprecationTriggered>>
     */
    private array $testTriggeredDeprecationEvents = [];

    /**
     * @psalm-var array<string,list<PhpDeprecationTriggered>>
     */
    private array $testTriggeredPhpDeprecationEvents = [];

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-var array<string,list<PhpunitDeprecationTriggered>>
     */
    private array $testTriggeredPhpunitDeprecationEvents = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-var array<string,list<ErrorTriggered>>
     */
    private array $testTriggeredErrorEvents = [];

    /**
     * @psalm-var array<string,list<NoticeTriggered>>
     */
    private array $testTriggeredNoticeEvents = [];

    /**
     * @psalm-var array<string,list<PhpNoticeTriggered>>
     */
    private array $testTriggeredPhpNoticeEvents = [];

    /**
     * @psalm-var array<string,list<WarningTriggered>>
     */
    private array $testTriggeredWarningEvents = [];

    /**
     * @psalm-var array<string,list<PhpWarningTriggered>>
     */
    private array $testTriggeredPhpWarningEvents = [];

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-var array<string,list<PhpunitErrorTriggered>>
     */
    private array $testTriggeredPhpunitErrorEvents = [];

    /**
     * @psalm-var array<string,list<PhpunitWarningTriggered>>
     */
    private array $testTriggeredPhpunitWarningEvents = [];

    /**
     * @psalm-var list<TestRunnerWarningTriggered>
     */
    private array $testRunnerTriggeredWarningEvents = [];

    /**
     * @psalm-var list<TestRunnerDeprecationTriggered>
     */
    private array $testRunnerTriggeredDeprecationEvents = [];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $errors = [];

    /**
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $deprecations = [];

    /**
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $notices = [];

    /**
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $warnings = [];

    /**
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $phpDeprecations = [];

    /**
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $phpNotices = [];

    /**
     * @psalm-var array<non-empty-string, Issue>
     */
    private array $phpWarnings = [];

    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(Facade $facade, Source $source)
    {
        $facade->registerSubscribers(
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct()
    {
        Facade::registerSubscribers(
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            new ExecutionStartedSubscriber($this),
            new TestSuiteSkippedSubscriber($this),
            new TestSuiteStartedSubscriber($this),
            new TestSuiteFinishedSubscriber($this),
            new TestPreparedSubscriber($this),
            new TestFinishedSubscriber($this),
            new BeforeTestClassMethodErroredSubscriber($this),
            new TestErroredSubscriber($this),
            new TestFailedSubscriber($this),
            new TestMarkedIncompleteSubscriber($this),
            new TestSkippedSubscriber($this),
            new TestConsideredRiskySubscriber($this),
            new TestTriggeredDeprecationSubscriber($this),
            new TestTriggeredErrorSubscriber($this),
            new TestTriggeredNoticeSubscriber($this),
            new TestTriggeredPhpDeprecationSubscriber($this),
            new TestTriggeredPhpNoticeSubscriber($this),
            new TestTriggeredPhpunitDeprecationSubscriber($this),
            new TestTriggeredPhpunitErrorSubscriber($this),
            new TestTriggeredPhpunitWarningSubscriber($this),
            new TestTriggeredPhpWarningSubscriber($this),
            new TestTriggeredWarningSubscriber($this),
            new TestRunnerTriggeredDeprecationSubscriber($this),
            new TestRunnerTriggeredWarningSubscriber($this),
        );
<<<<<<< HEAD
<<<<<<< HEAD

        $this->source = $source;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function result(): TestResult
    {
        return new TestResult(
            $this->numberOfTests,
            $this->numberOfTestsRun,
            $this->numberOfAssertions,
            $this->testErroredEvents,
            $this->testFailedEvents,
            $this->testConsideredRiskyEvents,
            $this->testSuiteSkippedEvents,
            $this->testSkippedEvents,
            $this->testMarkedIncompleteEvents,
<<<<<<< HEAD
<<<<<<< HEAD
            $this->testTriggeredPhpunitDeprecationEvents,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->testTriggeredDeprecationEvents,
            $this->testTriggeredPhpDeprecationEvents,
            $this->testTriggeredPhpunitDeprecationEvents,
            $this->testTriggeredErrorEvents,
            $this->testTriggeredNoticeEvents,
            $this->testTriggeredPhpNoticeEvents,
            $this->testTriggeredWarningEvents,
            $this->testTriggeredPhpWarningEvents,
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->testTriggeredPhpunitErrorEvents,
            $this->testTriggeredPhpunitWarningEvents,
            $this->testRunnerTriggeredDeprecationEvents,
            $this->testRunnerTriggeredWarningEvents,
<<<<<<< HEAD
<<<<<<< HEAD
            array_values($this->errors),
            array_values($this->deprecations),
            array_values($this->notices),
            array_values($this->warnings),
            array_values($this->phpDeprecations),
            array_values($this->phpNotices),
            array_values($this->phpWarnings),
            $this->numberOfIssuesIgnoredByBaseline,
        );
    }

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function hasTestErroredEvents(): bool
    {
        return !empty($this->testErroredEvents);
    }

    public function hasTestFailedEvents(): bool
    {
        return !empty($this->testFailedEvents);
    }

    public function hasTestConsideredRiskyEvents(): bool
    {
        return !empty($this->testConsideredRiskyEvents);
    }

    public function hasTestSkippedEvents(): bool
    {
        return !empty($this->testSkippedEvents);
    }

    public function hasTestMarkedIncompleteEvents(): bool
    {
        return !empty($this->testMarkedIncompleteEvents);
    }

    public function hasTestRunnerTriggeredWarningEvents(): bool
    {
        return !empty($this->testRunnerTriggeredWarningEvents);
    }

    /**
     * @psalm-return list<TestRunnerWarningTriggered>
     */
    public function testRunnerTriggeredWarningEvents(): array
    {
        return $this->testRunnerTriggeredWarningEvents;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function executionStarted(ExecutionStarted $event): void
    {
        $this->numberOfTests = $event->testSuite()->count();
    }

    public function testSuiteSkipped(TestSuiteSkipped $event): void
    {
        $testSuite = $event->testSuite();

        if (!$testSuite->isForTestClass()) {
            return;
        }

        $this->testSuiteSkippedEvents[] = $event;
    }

    public function testSuiteStarted(TestSuiteStarted $event): void
    {
        $testSuite = $event->testSuite();

        if (!$testSuite->isForTestClass()) {
            return;
        }

        $this->currentTestSuiteForTestClassFailed = false;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @throws NoDataSetFromDataProviderException
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * @throws NoDataSetFromDataProviderException
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function testSuiteFinished(TestSuiteFinished $event): void
    {
        if ($this->currentTestSuiteForTestClassFailed) {
            return;
        }

        $testSuite = $event->testSuite();

        if ($testSuite->isWithName()) {
            return;
        }

        if ($testSuite->isForTestMethodWithDataProvider()) {
            assert($testSuite instanceof TestSuiteForTestMethodWithDataProvider);

            $test = $testSuite->tests()->asArray()[0];

            assert($test instanceof TestMethod);

            PassedTests::instance()->testMethodPassed($test, null);

            return;
        }

        assert($testSuite instanceof TestSuiteForTestClass);

        PassedTests::instance()->testClassPassed($testSuite->className());
    }

    public function testPrepared(): void
    {
        $this->prepared = true;
    }

    public function testFinished(Finished $event): void
    {
        $this->numberOfAssertions += $event->numberOfAssertionsPerformed();

        $this->numberOfTestsRun++;

        $this->prepared = false;
    }

    public function beforeTestClassMethodErrored(BeforeFirstTestMethodErrored $event): void
    {
        $this->testErroredEvents[] = $event;

        $this->numberOfTestsRun++;
    }

    public function testErrored(Errored $event): void
    {
        $this->testErroredEvents[] = $event;

        $this->currentTestSuiteForTestClassFailed = true;

        /*
         * @todo Eliminate this special case
         */
        if (str_contains($event->asString(), 'Test was run in child process and ended unexpectedly')) {
            return;
        }

        if (!$this->prepared) {
            $this->numberOfTestsRun++;
        }
    }

    public function testFailed(Failed $event): void
    {
        $this->testFailedEvents[] = $event;

        $this->currentTestSuiteForTestClassFailed = true;
    }

    public function testMarkedIncomplete(MarkedIncomplete $event): void
    {
        $this->testMarkedIncompleteEvents[] = $event;
    }

    public function testSkipped(TestSkipped $event): void
    {
        $this->testSkippedEvents[] = $event;

        if (!$this->prepared) {
            $this->numberOfTestsRun++;
        }
    }

    public function testConsideredRisky(ConsideredRisky $event): void
    {
        if (!isset($this->testConsideredRiskyEvents[$event->test()->id()])) {
            $this->testConsideredRiskyEvents[$event->test()->id()] = [];
        }

        $this->testConsideredRiskyEvents[$event->test()->id()][] = $event;
    }

    public function testTriggeredDeprecation(DeprecationTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($event->ignoredByTest()) {
            return;
        }

        if ($event->ignoredByBaseline()) {
            $this->numberOfIssuesIgnoredByBaseline++;

            return;
        }

        if (!$this->source->ignoreSuppressionOfDeprecations() && $event->wasSuppressed()) {
            return;
        }

        if ($this->source->restrictDeprecations() && !(new SourceFilter)->includes($this->source, $event->file())) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->deprecations[$id])) {
            $this->deprecations[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->deprecations[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredDeprecationEvents[$event->test()->id()])) {
            $this->testTriggeredDeprecationEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredDeprecationEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredPhpDeprecation(PhpDeprecationTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($event->ignoredByTest()) {
            return;
        }

        if ($event->ignoredByBaseline()) {
            $this->numberOfIssuesIgnoredByBaseline++;

            return;
        }

        if (!$this->source->ignoreSuppressionOfPhpDeprecations() && $event->wasSuppressed()) {
            return;
        }

        if ($this->source->restrictDeprecations() && !(new SourceFilter)->includes($this->source, $event->file())) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->phpDeprecations[$id])) {
            $this->phpDeprecations[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->phpDeprecations[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredPhpDeprecationEvents[$event->test()->id()])) {
            $this->testTriggeredPhpDeprecationEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredPhpDeprecationEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredPhpunitDeprecation(PhpunitDeprecationTriggered $event): void
    {
        if (!isset($this->testTriggeredPhpunitDeprecationEvents[$event->test()->id()])) {
            $this->testTriggeredPhpunitDeprecationEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredPhpunitDeprecationEvents[$event->test()->id()][] = $event;
    }

    public function testTriggeredError(ErrorTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->source->ignoreSuppressionOfErrors() && $event->wasSuppressed()) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->errors[$id])) {
            $this->errors[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->errors[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredErrorEvents[$event->test()->id()])) {
            $this->testTriggeredErrorEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredErrorEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredNotice(NoticeTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($event->ignoredByBaseline()) {
            $this->numberOfIssuesIgnoredByBaseline++;

            return;
        }

        if (!$this->source->ignoreSuppressionOfNotices() && $event->wasSuppressed()) {
            return;
        }

        if ($this->source->restrictNotices() && !(new SourceFilter)->includes($this->source, $event->file())) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->notices[$id])) {
            $this->notices[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->notices[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredNoticeEvents[$event->test()->id()])) {
            $this->testTriggeredNoticeEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredNoticeEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredPhpNotice(PhpNoticeTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($event->ignoredByBaseline()) {
            $this->numberOfIssuesIgnoredByBaseline++;

            return;
        }

        if (!$this->source->ignoreSuppressionOfPhpNotices() && $event->wasSuppressed()) {
            return;
        }

        if ($this->source->restrictNotices() && !(new SourceFilter)->includes($this->source, $event->file())) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->phpNotices[$id])) {
            $this->phpNotices[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->phpNotices[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredPhpNoticeEvents[$event->test()->id()])) {
            $this->testTriggeredPhpNoticeEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredPhpNoticeEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredWarning(WarningTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($event->ignoredByBaseline()) {
            $this->numberOfIssuesIgnoredByBaseline++;

            return;
        }

        if (!$this->source->ignoreSuppressionOfWarnings() && $event->wasSuppressed()) {
            return;
        }

        if ($this->source->restrictWarnings() && !(new SourceFilter)->includes($this->source, $event->file())) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->warnings[$id])) {
            $this->warnings[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->warnings[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredWarningEvents[$event->test()->id()])) {
            $this->testTriggeredWarningEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredWarningEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredPhpWarning(PhpWarningTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($event->ignoredByBaseline()) {
            $this->numberOfIssuesIgnoredByBaseline++;

            return;
        }

        if (!$this->source->ignoreSuppressionOfPhpWarnings() && $event->wasSuppressed()) {
            return;
        }

        if ($this->source->restrictWarnings() && !(new SourceFilter)->includes($this->source, $event->file())) {
            return;
        }

        $id = $this->issueId($event);

        if (!isset($this->phpWarnings[$id])) {
            $this->phpWarnings[$id] = Issue::from(
                $event->file(),
                $event->line(),
                $event->message(),
                $event->test(),
            );

            return;
        }

        $this->phpWarnings[$id]->triggeredBy($event->test());
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->testTriggeredPhpWarningEvents[$event->test()->id()])) {
            $this->testTriggeredPhpWarningEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredPhpWarningEvents[$event->test()->id()][] = $event;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function testTriggeredPhpunitError(PhpunitErrorTriggered $event): void
    {
        if (!isset($this->testTriggeredPhpunitErrorEvents[$event->test()->id()])) {
            $this->testTriggeredPhpunitErrorEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredPhpunitErrorEvents[$event->test()->id()][] = $event;
    }

    public function testTriggeredPhpunitWarning(PhpunitWarningTriggered $event): void
    {
        if (!isset($this->testTriggeredPhpunitWarningEvents[$event->test()->id()])) {
            $this->testTriggeredPhpunitWarningEvents[$event->test()->id()] = [];
        }

        $this->testTriggeredPhpunitWarningEvents[$event->test()->id()][] = $event;
    }

    public function testRunnerTriggeredDeprecation(TestRunnerDeprecationTriggered $event): void
    {
        $this->testRunnerTriggeredDeprecationEvents[] = $event;
    }

    public function testRunnerTriggeredWarning(TestRunnerWarningTriggered $event): void
    {
        $this->testRunnerTriggeredWarningEvents[] = $event;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function hasErroredTests(): bool
    {
        return !empty($this->testErroredEvents);
    }

    public function hasFailedTests(): bool
    {
        return !empty($this->testFailedEvents);
    }

    public function hasRiskyTests(): bool
    {
        return !empty($this->testConsideredRiskyEvents);
    }

    public function hasSkippedTests(): bool
    {
        return !empty($this->testSkippedEvents);
    }

    public function hasIncompleteTests(): bool
    {
        return !empty($this->testMarkedIncompleteEvents);
    }

    public function hasDeprecations(): bool
    {
        return !empty($this->deprecations) ||
               !empty($this->phpDeprecations) ||
               !empty($this->testTriggeredPhpunitDeprecationEvents) ||
               !empty($this->testRunnerTriggeredDeprecationEvents);
    }

    public function hasNotices(): bool
    {
        return !empty($this->notices) ||
               !empty($this->phpNotices);
    }

    public function hasWarnings(): bool
    {
        return !empty($this->warnings) ||
               !empty($this->phpWarnings) ||
               !empty($this->testTriggeredPhpunitWarningEvents) ||
               !empty($this->testRunnerTriggeredWarningEvents);
    }

    /**
     * @psalm-return non-empty-string
     */
    private function issueId(DeprecationTriggered|ErrorTriggered|NoticeTriggered|PhpDeprecationTriggered|PhpNoticeTriggered|PhpWarningTriggered|WarningTriggered $event): string
    {
        return implode(':', [$event->file(), $event->line(), $event->message()]);
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function hasWarningEvents(): bool
    {
        return !empty($this->testTriggeredWarningEvents) ||
               !empty($this->testTriggeredPhpWarningEvents) ||
               !empty($this->testTriggeredPhpunitWarningEvents) ||
               !empty($this->testRunnerTriggeredWarningEvents);
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
