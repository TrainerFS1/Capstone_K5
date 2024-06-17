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
use function array_keys;
use function array_map;
use function assert;
use function call_user_func;
use function class_exists;
use function count;
use function implode;
use function is_callable;
use function is_file;
use function is_subclass_of;
use function sprintf;
use function str_ends_with;
use function str_starts_with;
use function trim;
use Iterator;
use IteratorAggregate;
use PHPUnit\Event;
<<<<<<< HEAD
=======
use PHPUnit\Event\Code\TestDox;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Event\Code\TestMethod;
use PHPUnit\Event\NoPreviousThrowableException;
use PHPUnit\Metadata\Api\Dependencies;
use PHPUnit\Metadata\Api\Groups;
use PHPUnit\Metadata\Api\HookMethods;
use PHPUnit\Metadata\Api\Requirements;
use PHPUnit\Metadata\MetadataCollection;
use PHPUnit\Runner\Exception as RunnerException;
use PHPUnit\Runner\Filter\Factory;
use PHPUnit\Runner\PhptTestCase;
use PHPUnit\Runner\TestSuiteLoader;
<<<<<<< HEAD
use PHPUnit\TestRunner\TestResult\Facade as TestResultFacade;
=======
use PHPUnit\TestRunner\TestResult\Facade;
use PHPUnit\TextUI\Configuration\Registry;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Util\Filter;
use PHPUnit\Util\Reflection;
use PHPUnit\Util\Test as TestUtil;
use ReflectionClass;
use ReflectionMethod;
<<<<<<< HEAD
use SebastianBergmann\CodeCoverage\InvalidArgumentException;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException;
use Throwable;

/**
 * @template-implements IteratorAggregate<int, Test>
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class TestSuite implements IteratorAggregate, Reorderable, SelfDescribing, Test
{
<<<<<<< HEAD
    /**
     * @psalm-var non-empty-string
     */
    private string $name;
=======
    protected string $name = '';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @psalm-var array<string,list<Test>>
     */
<<<<<<< HEAD
    private array $groups = [];

    /**
     * @psalm-var ?list<ExecutionOrderDependency>
     */
    private ?array $requiredTests = null;
=======
    protected array $groups         = [];
    protected ?array $requiredTests = null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @psalm-var list<Test>
     */
<<<<<<< HEAD
    private array $tests = [];

    /**
     * @psalm-var ?list<ExecutionOrderDependency>
     */
    private ?array $providedTests    = null;
    private ?Factory $iteratorFilter = null;
    private bool $wasRun             = false;

    /**
     * @psalm-param non-empty-string $name
     */
    public static function empty(string $name): static
    {
=======
    private array $tests             = [];
    private ?array $providedTests    = null;
    private ?Factory $iteratorFilter = null;
    private readonly bool $stopOnError;
    private readonly bool $stopOnFailure;
    private readonly bool $stopOnWarning;
    private readonly bool $stopOnRisky;
    private readonly bool $stopOnIncomplete;
    private readonly bool $stopOnSkipped;
    private readonly bool $stopOnDefect;

    public static function empty(string $name = null): static
    {
        if ($name === null) {
            $name = '';
        }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return new static($name);
    }

    /**
     * @psalm-param class-string $className
     */
    public static function fromClassName(string $className): static
    {
        assert(class_exists($className));

        $class = new ReflectionClass($className);

        return static::fromClassReflector($class);
    }

    public static function fromClassReflector(ReflectionClass $class): static
    {
        $testSuite = new static($class->getName());

        $constructor = $class->getConstructor();

        if ($constructor !== null && !$constructor->isPublic()) {
            Event\Facade::emitter()->testRunnerTriggeredWarning(
                sprintf(
                    'Class "%s" has no public constructor.',
<<<<<<< HEAD
                    $class->getName(),
                ),
=======
                    $class->getName()
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return $testSuite;
        }

<<<<<<< HEAD
        foreach (Reflection::publicMethodsInTestClass($class) as $method) {
=======
        foreach ((new Reflection)->publicMethodsInTestClass($class) as $method) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if ($method->getDeclaringClass()->getName() === Assert::class) {
                continue;
            }

            if ($method->getDeclaringClass()->getName() === TestCase::class) {
                continue;
            }

            if (!TestUtil::isTestMethod($method)) {
                continue;
            }

            $testSuite->addTestMethod($class, $method);
        }

        if (count($testSuite) === 0) {
            Event\Facade::emitter()->testRunnerTriggeredWarning(
                sprintf(
                    'No tests found in class "%s".',
<<<<<<< HEAD
                    $class->getName(),
                ),
=======
                    $class->getName()
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return $testSuite;
    }

<<<<<<< HEAD
    /**
     * @psalm-param non-empty-string $name
     */
    final private function __construct(string $name)
    {
        $this->name = $name;
=======
    final private function __construct(string $name)
    {
        $this->name = $name;

        $configuration = Registry::get();

        $this->stopOnError      = $configuration->stopOnError();
        $this->stopOnFailure    = $configuration->stopOnFailure();
        $this->stopOnWarning    = $configuration->stopOnWarning();
        $this->stopOnRisky      = $configuration->stopOnRisky();
        $this->stopOnIncomplete = $configuration->stopOnIncomplete();
        $this->stopOnSkipped    = $configuration->stopOnSkipped();
        $this->stopOnDefect     = $configuration->stopOnDefect();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Returns a string representation of the test suite.
     */
    public function toString(): string
    {
<<<<<<< HEAD
        return $this->name();
=======
        return $this->getName();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Adds a test to the suite.
     */
    public function addTest(Test $test, array $groups = []): void
    {
        $class = new ReflectionClass($test);

        if (!$class->isAbstract()) {
            $this->tests[] = $test;
            $this->clearCaches();

            if ($test instanceof self && empty($groups)) {
<<<<<<< HEAD
                $groups = $test->groups();
=======
                $groups = $test->getGroups();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            if ($this->containsOnlyVirtualGroups($groups)) {
                $groups[] = 'default';
            }

            foreach ($groups as $group) {
                if (!isset($this->groups[$group])) {
                    $this->groups[$group] = [$test];
                } else {
                    $this->groups[$group][] = $test;
                }
            }

            if ($test instanceof TestCase) {
                $test->setGroups($groups);
            }
        }
    }

    /**
     * Adds the tests from the given class to the suite.
     *
     * @throws Exception
     */
    public function addTestSuite(ReflectionClass $testClass): void
    {
        if ($testClass->isAbstract()) {
            throw new Exception(
                sprintf(
                    'Class %s is abstract',
<<<<<<< HEAD
                    $testClass->getName(),
                ),
=======
                    $testClass->getName()
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if (!$testClass->isSubclassOf(TestCase::class)) {
            throw new Exception(
                sprintf(
                    'Class %s is not a subclass of %s',
                    $testClass->getName(),
<<<<<<< HEAD
                    TestCase::class,
                ),
=======
                    TestCase::class
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $this->addTest(self::fromClassReflector($testClass));
    }

    /**
     * Wraps both <code>addTest()</code> and <code>addTestSuite</code>
     * as well as the separate import statements for the user's convenience.
     *
     * If the named file cannot be read or there are no new tests that can be
     * added, a <code>PHPUnit\Framework\WarningTestCase</code> will be created instead,
     * leaving the current test run untouched.
     *
     * @throws Exception
     */
    public function addTestFile(string $filename): void
    {
<<<<<<< HEAD
        if (str_ends_with($filename, '.phpt') && is_file($filename)) {
=======
        if (is_file($filename) && str_ends_with($filename, '.phpt')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            try {
                $this->addTest(new PhptTestCase($filename));
            } catch (RunnerException $e) {
                Event\Facade::emitter()->testRunnerTriggeredWarning(
<<<<<<< HEAD
                    $e->getMessage(),
=======
                    $e->getMessage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            return;
        }

        try {
            $this->addTestSuite(
<<<<<<< HEAD
                (new TestSuiteLoader)->load($filename),
            );
        } catch (RunnerException $e) {
            Event\Facade::emitter()->testRunnerTriggeredWarning(
                $e->getMessage(),
=======
                (new TestSuiteLoader)->load($filename)
            );
        } catch (RunnerException $e) {
            Event\Facade::emitter()->testRunnerTriggeredWarning(
                $e->getMessage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * Wrapper for addTestFile() that adds multiple test files.
     *
     * @throws Exception
     */
    public function addTestFiles(iterable $fileNames): void
    {
        foreach ($fileNames as $filename) {
            $this->addTestFile((string) $filename);
        }
    }

    /**
     * Counts the number of test cases that will be run by this test.
     */
    public function count(): int
    {
        $numTests = 0;

        foreach ($this as $test) {
            $numTests += count($test);
        }

        return $numTests;
    }

    public function isEmpty(): bool
    {
        return empty($this->tests);
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
     */
    public function name(): string
=======
     * Returns the name of the suite.
     */
    public function getName(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->name;
    }

    /**
     * Returns the test groups of the suite.
     *
     * @psalm-return list<string>
     */
<<<<<<< HEAD
    public function groups(): array
    {
        return array_map(
            'strval',
            array_keys($this->groups),
        );
    }

    public function groupDetails(): array
=======
    public function getGroups(): array
    {
        return array_map(
            'strval',
            array_keys($this->groups)
        );
    }

    public function getGroupDetails(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->groups;
    }

    /**
<<<<<<< HEAD
     * @throws CodeCoverageException
     * @throws Event\RuntimeException
     * @throws Exception
     * @throws InvalidArgumentException
=======
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws CodeCoverageException
     * @throws Event\RuntimeException
     * @throws Exception
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws NoPreviousThrowableException
     * @throws UnintentionallyCoveredCodeException
     */
    public function run(): void
    {
<<<<<<< HEAD
        if ($this->wasRun) {
            // @codeCoverageIgnoreStart
            throw new Exception('The tests aggregated by this TestSuite were already run');
            // @codeCoverageIgnoreEnd
        }

        $this->wasRun = true;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (count($this) === 0) {
            return;
        }

        $emitter                       = Event\Facade::emitter();
<<<<<<< HEAD
        $testSuiteValueObjectForEvents = Event\TestSuite\TestSuiteBuilder::from($this);
=======
        $testSuiteValueObjectForEvents = Event\TestSuite\TestSuite::fromTestSuite($this);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $emitter->testSuiteStarted($testSuiteValueObjectForEvents);

        if (!$this->invokeMethodsBeforeFirstTest($emitter, $testSuiteValueObjectForEvents)) {
            return;
        }

        foreach ($this as $test) {
<<<<<<< HEAD
            if (TestResultFacade::shouldStop()) {
                $emitter->testRunnerExecutionAborted();

=======
            if ($this->shouldStop()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                break;
            }

            $test->run();
<<<<<<< HEAD

            foreach (array_keys($this->tests) as $key) {
                if ($test === $this->tests[$key]) {
                    unset($this->tests[$key]);

                    break;
                }
            }

            if ($test instanceof TestCase || $test instanceof self) {
                foreach ($test->groups() as $group) {
                    if (!isset($this->groups[$group])) {
                        continue;
                    }

                    foreach (array_keys($this->groups[$group]) as $key) {
                        if ($test === $this->groups[$group][$key]) {
                            unset($this->groups[$group][$key]);

                            break;
                        }
                    }
                }
            }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $this->invokeMethodsAfterLastTest($emitter);

        $emitter->testSuiteFinished($testSuiteValueObjectForEvents);
    }

    /**
     * Returns the tests as an enumeration.
     *
     * @psalm-return list<Test>
     */
    public function tests(): array
    {
        return $this->tests;
    }

    /**
     * Set tests of the test suite.
     *
     * @psalm-param list<Test> $tests
     */
    public function setTests(array $tests): void
    {
        $this->tests = $tests;
    }

    /**
     * Mark the test suite as skipped.
     *
     * @throws SkippedTestSuiteError
     */
    public function markTestSuiteSkipped(string $message = ''): never
    {
        throw new SkippedTestSuiteError($message);
    }

    /**
     * Returns an iterator for this test suite.
     */
    public function getIterator(): Iterator
    {
        $iterator = new TestSuiteIterator($this);

        if ($this->iteratorFilter !== null) {
            $iterator = $this->iteratorFilter->factory($iterator, $this);
        }

        return $iterator;
    }

    public function injectFilter(Factory $filter): void
    {
        $this->iteratorFilter = $filter;

        foreach ($this as $test) {
            if ($test instanceof self) {
                $test->injectFilter($filter);
            }
        }
    }

    /**
     * @psalm-return list<ExecutionOrderDependency>
     */
    public function provides(): array
    {
        if ($this->providedTests === null) {
            $this->providedTests = [];

            if (is_callable($this->sortId(), true)) {
                $this->providedTests[] = new ExecutionOrderDependency($this->sortId());
            }

            foreach ($this->tests as $test) {
                if (!($test instanceof Reorderable)) {
<<<<<<< HEAD
                    continue;
                }

=======
                    // @codeCoverageIgnoreStart
                    continue;
                    // @codeCoverageIgnoreEnd
                }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $this->providedTests = ExecutionOrderDependency::mergeUnique($this->providedTests, $test->provides());
            }
        }

        return $this->providedTests;
    }

    /**
     * @psalm-return list<ExecutionOrderDependency>
     */
    public function requires(): array
    {
        if ($this->requiredTests === null) {
            $this->requiredTests = [];

            foreach ($this->tests as $test) {
                if (!($test instanceof Reorderable)) {
<<<<<<< HEAD
                    continue;
                }

                $this->requiredTests = ExecutionOrderDependency::mergeUnique(
                    ExecutionOrderDependency::filterInvalid($this->requiredTests),
                    $test->requires(),
=======
                    // @codeCoverageIgnoreStart
                    continue;
                    // @codeCoverageIgnoreEnd
                }
                $this->requiredTests = ExecutionOrderDependency::mergeUnique(
                    ExecutionOrderDependency::filterInvalid($this->requiredTests),
                    $test->requires()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $this->requiredTests = ExecutionOrderDependency::diff($this->requiredTests, $this->provides());
        }

        return $this->requiredTests;
    }

    public function sortId(): string
    {
<<<<<<< HEAD
        return $this->name() . '::class';
=======
        return $this->getName() . '::class';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @psalm-assert-if-true class-string $this->name
     */
    public function isForTestClass(): bool
    {
        return class_exists($this->name, false) && is_subclass_of($this->name, TestCase::class);
    }

    /**
<<<<<<< HEAD
     * @throws Event\TestData\MoreThanOneDataSetFromDataProviderException
=======
     * @throws \PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws Exception
     */
    protected function addTestMethod(ReflectionClass $class, ReflectionMethod $method): void
    {
        $className  = $class->getName();
        $methodName = $method->getName();

        assert(!empty($methodName));

        try {
            $test = (new TestBuilder)->build($class, $methodName);
        } catch (InvalidDataProviderException $e) {
            Event\Facade::emitter()->testTriggeredPhpunitError(
                new TestMethod(
                    $className,
                    $methodName,
                    $class->getFileName(),
                    $method->getStartLine(),
<<<<<<< HEAD
                    Event\Code\TestDoxBuilder::fromClassNameAndMethodName(
                        $className,
                        $methodName,
                    ),
                    MetadataCollection::fromArray([]),
                    Event\TestData\TestDataCollection::fromArray([]),
=======
                    TestDox::fromClassNameAndMethodName(
                        $className,
                        $methodName
                    ),
                    MetadataCollection::fromArray([]),
                    Event\TestData\TestDataCollection::fromArray([])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                ),
                sprintf(
                    "The data provider specified for %s::%s is invalid\n%s",
                    $className,
                    $methodName,
<<<<<<< HEAD
                    $this->throwableToString($e),
                ),
=======
                    $this->throwableToString($e)
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return;
        }

        if ($test instanceof TestCase || $test instanceof DataProviderTestSuite) {
            $test->setDependencies(
<<<<<<< HEAD
                Dependencies::dependencies($class->getName(), $methodName),
=======
                Dependencies::dependencies($class->getName(), $methodName)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $this->addTest(
            $test,
<<<<<<< HEAD
            (new Groups)->groups($class->getName(), $methodName),
=======
            (new Groups)->groups($class->getName(), $methodName)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    private function clearCaches(): void
    {
        $this->providedTests = null;
        $this->requiredTests = null;
    }

    private function containsOnlyVirtualGroups(array $groups): bool
    {
        foreach ($groups as $group) {
            if (!str_starts_with($group, '__phpunit_')) {
                return false;
            }
        }

        return true;
    }

    private function methodDoesNotExistOrIsDeclaredInTestCase(string $methodName): bool
    {
        $reflector = new ReflectionClass($this->name);

        return !$reflector->hasMethod($methodName) ||
               $reflector->getMethod($methodName)->getDeclaringClass()->getName() === TestCase::class;
    }

<<<<<<< HEAD
=======
    private function shouldStop(): bool
    {
        if (($this->stopOnDefect || $this->stopOnError) && Facade::hasTestErroredEvents()) {
            return true;
        }

        if (($this->stopOnDefect || $this->stopOnFailure) && Facade::hasTestFailedEvents()) {
            return true;
        }

        if (($this->stopOnDefect || $this->stopOnWarning) && Facade::hasWarningEvents()) {
            return true;
        }

        if (($this->stopOnDefect || $this->stopOnRisky) && Facade::hasTestConsideredRiskyEvents()) {
            return true;
        }

        if ($this->stopOnSkipped && Facade::hasTestSkippedEvents()) {
            return true;
        }

        if ($this->stopOnIncomplete && Facade::hasTestMarkedIncompleteEvents()) {
            return true;
        }

        return false;
    }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @throws Exception
     */
    private function throwableToString(Throwable $t): string
    {
        $message = $t->getMessage();

        if (empty(trim($message))) {
            $message = '<no message>';
        }

        if ($t instanceof InvalidDataProviderException) {
            return sprintf(
                "%s\n%s",
                $message,
<<<<<<< HEAD
                Filter::getFilteredStacktrace($t),
=======
                Filter::getFilteredStacktrace($t)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return sprintf(
            "%s: %s\n%s",
            $t::class,
            $message,
<<<<<<< HEAD
            Filter::getFilteredStacktrace($t),
=======
            Filter::getFilteredStacktrace($t)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @throws Exception
     * @throws NoPreviousThrowableException
     */
    private function invokeMethodsBeforeFirstTest(Event\Emitter $emitter, Event\TestSuite\TestSuite $testSuiteValueObjectForEvents): bool
    {
        if (!$this->isForTestClass()) {
            return true;
        }

        $methodsCalledBeforeFirstTest = [];

        $beforeClassMethods = (new HookMethods)->hookMethods($this->name)['beforeClass'];

        try {
            foreach ($beforeClassMethods as $beforeClassMethod) {
                if ($this->methodDoesNotExistOrIsDeclaredInTestCase($beforeClassMethod)) {
                    continue;
                }

                if ($missingRequirements = (new Requirements)->requirementsNotSatisfiedFor($this->name, $beforeClassMethod)) {
                    $this->markTestSuiteSkipped(implode(PHP_EOL, $missingRequirements));
                }

                $methodCalledBeforeFirstTest = new Event\Code\ClassMethod(
                    $this->name,
<<<<<<< HEAD
                    $beforeClassMethod,
=======
                    $beforeClassMethod
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                $emitter->testBeforeFirstTestMethodCalled(
                    $this->name,
<<<<<<< HEAD
                    $methodCalledBeforeFirstTest,
=======
                    $methodCalledBeforeFirstTest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                $methodsCalledBeforeFirstTest[] = $methodCalledBeforeFirstTest;

                call_user_func([$this->name, $beforeClassMethod]);
            }
<<<<<<< HEAD
        } catch (SkippedTest|SkippedTestSuiteError $e) {
            $emitter->testSuiteSkipped(
                $testSuiteValueObjectForEvents,
                $e->getMessage(),
=======
        } catch (SkippedTestSuiteError|SkippedTest $e) {
            $emitter->testSuiteSkipped(
                $testSuiteValueObjectForEvents,
                $e->getMessage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return false;
        } catch (Throwable $t) {
            assert(isset($methodCalledBeforeFirstTest));

            $emitter->testBeforeFirstTestMethodErrored(
                $this->name,
                $methodCalledBeforeFirstTest,
<<<<<<< HEAD
                Event\Code\ThrowableBuilder::from($t),
=======
                Event\Code\Throwable::from($t)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            if (!empty($methodsCalledBeforeFirstTest)) {
                $emitter->testBeforeFirstTestMethodFinished(
                    $this->name,
<<<<<<< HEAD
                    ...$methodsCalledBeforeFirstTest,
=======
                    ...$methodsCalledBeforeFirstTest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            return false;
        }

        if (!empty($methodsCalledBeforeFirstTest)) {
            $emitter->testBeforeFirstTestMethodFinished(
                $this->name,
<<<<<<< HEAD
                ...$methodsCalledBeforeFirstTest,
=======
                ...$methodsCalledBeforeFirstTest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return true;
    }

    private function invokeMethodsAfterLastTest(Event\Emitter $emitter): void
    {
        if (!$this->isForTestClass()) {
            return;
        }

        $methodsCalledAfterLastTest = [];

        $afterClassMethods = (new HookMethods)->hookMethods($this->name)['afterClass'];

        foreach ($afterClassMethods as $afterClassMethod) {
            if ($this->methodDoesNotExistOrIsDeclaredInTestCase($afterClassMethod)) {
                continue;
            }

            try {
                call_user_func([$this->name, $afterClassMethod]);

                $methodCalledAfterLastTest = new Event\Code\ClassMethod(
                    $this->name,
<<<<<<< HEAD
                    $afterClassMethod,
=======
                    $afterClassMethod
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                $emitter->testAfterLastTestMethodCalled(
                    $this->name,
<<<<<<< HEAD
                    $methodCalledAfterLastTest,
=======
                    $methodCalledAfterLastTest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                $methodsCalledAfterLastTest[] = $methodCalledAfterLastTest;
            } catch (Throwable) {
                // @todo
            }
        }

        if (!empty($methodsCalledAfterLastTest)) {
            $emitter->testAfterLastTestMethodFinished(
                $this->name,
<<<<<<< HEAD
                ...$methodsCalledAfterLastTest,
=======
                ...$methodsCalledAfterLastTest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }
}
