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

use const LC_ALL;
use const LC_COLLATE;
use const LC_CTYPE;
use const LC_MONETARY;
use const LC_NUMERIC;
use const LC_TIME;
use const PATHINFO_FILENAME;
use const PHP_EOL;
use const PHP_URL_PATH;
<<<<<<< HEAD
<<<<<<< HEAD
use function array_is_list;
use function array_keys;
use function array_map;
use function array_merge;
use function array_values;
use function assert;
=======
use function array_merge;
use function array_values;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use function array_merge;
use function array_values;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function basename;
use function chdir;
use function class_exists;
use function clearstatcache;
use function count;
use function defined;
use function explode;
use function getcwd;
use function implode;
use function in_array;
use function ini_set;
use function is_array;
use function is_callable;
use function is_int;
use function is_object;
use function is_string;
use function libxml_clear_errors;
use function method_exists;
use function ob_end_clean;
use function ob_get_clean;
use function ob_get_contents;
use function ob_get_level;
use function ob_start;
use function parse_url;
use function pathinfo;
use function preg_replace;
use function setlocale;
use function sprintf;
use function str_contains;
use function trim;
use AssertionError;
use DeepCopy\DeepCopy;
use PHPUnit\Event;
use PHPUnit\Event\NoPreviousThrowableException;
<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\Event\RuntimeException;
use PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException;
use PHPUnit\Framework\Constraint\Exception as ExceptionConstraint;
use PHPUnit\Framework\Constraint\ExceptionCode;
use PHPUnit\Framework\Constraint\ExceptionMessageIsOrContains;
use PHPUnit\Framework\Constraint\ExceptionMessageMatchesRegularExpression;
use PHPUnit\Framework\MockObject\Exception as MockObjectException;
use PHPUnit\Framework\MockObject\Generator\Generator as MockGenerator;
use PHPUnit\Framework\MockObject\MockBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\MockObject\MockObjectInternal;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException;
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
use PHPUnit\Framework\Constraint\Exception as ExceptionConstraint;
use PHPUnit\Framework\Constraint\ExceptionCode;
use PHPUnit\Framework\Constraint\MessageIsOrContains;
use PHPUnit\Framework\Constraint\MessageMatchesRegularExpression;
use PHPUnit\Framework\MockObject\Generator as MockGenerator;
use PHPUnit\Framework\MockObject\MockBuilder;
use PHPUnit\Framework\MockObject\MockObject;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\MockObject\Rule\AnyInvokedCount as AnyInvokedCountMatcher;
use PHPUnit\Framework\MockObject\Rule\InvokedAtLeastCount as InvokedAtLeastCountMatcher;
use PHPUnit\Framework\MockObject\Rule\InvokedAtLeastOnce as InvokedAtLeastOnceMatcher;
use PHPUnit\Framework\MockObject\Rule\InvokedAtMostCount as InvokedAtMostCountMatcher;
use PHPUnit\Framework\MockObject\Rule\InvokedCount as InvokedCountMatcher;
use PHPUnit\Framework\MockObject\Stub;
use PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls as ConsecutiveCallsStub;
use PHPUnit\Framework\MockObject\Stub\Exception as ExceptionStub;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument as ReturnArgumentStub;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback as ReturnCallbackStub;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf as ReturnSelfStub;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use PHPUnit\Framework\MockObject\Stub\ReturnValueMap as ReturnValueMapStub;
use PHPUnit\Framework\TestSize\TestSize;
use PHPUnit\Framework\TestStatus\TestStatus;
use PHPUnit\Metadata\Api\Groups;
use PHPUnit\Metadata\Api\HookMethods;
use PHPUnit\Metadata\Api\Requirements;
use PHPUnit\Metadata\Parser\Registry as MetadataRegistry;
use PHPUnit\TestRunner\TestResult\PassedTests;
use PHPUnit\TextUI\Configuration\Registry as ConfigurationRegistry;
use PHPUnit\Util\Cloner;
use PHPUnit\Util\Test as TestUtil;
use ReflectionClass;
use ReflectionException;
<<<<<<< HEAD
<<<<<<< HEAD
use ReflectionMethod;
use ReflectionObject;
use ReflectionParameter;
=======
use ReflectionObject;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use ReflectionObject;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use SebastianBergmann\CodeCoverage\StaticAnalysisCacheNotConfiguredException;
use SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException;
use SebastianBergmann\Comparator\Comparator;
use SebastianBergmann\Comparator\Factory as ComparatorFactory;
use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use SebastianBergmann\Exporter\Exporter;
use SebastianBergmann\GlobalState\ExcludeList as GlobalStateExcludeList;
use SebastianBergmann\GlobalState\Restorer;
use SebastianBergmann\GlobalState\Snapshot;
use SebastianBergmann\Invoker\TimeoutException;
use SebastianBergmann\ObjectEnumerator\Enumerator;
use SebastianBergmann\RecursionContext\Context;
use Throwable;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TestCase extends Assert implements Reorderable, SelfDescribing, Test
{
    private const LOCALE_CATEGORIES = [LC_ALL, LC_COLLATE, LC_CTYPE, LC_MONETARY, LC_NUMERIC, LC_TIME];
    private ?bool $backupGlobals    = null;

    /**
     * @psalm-var list<string>
     */
    private array $backupGlobalsExcludeList = [];
    private ?bool $backupStaticProperties   = null;

    /**
     * @psalm-var array<string,list<class-string>>
     */
    private array $backupStaticPropertiesExcludeList = [];
    private ?Snapshot $snapshot                      = null;
    private ?bool $runClassInSeparateProcess         = null;
    private ?bool $runTestInSeparateProcess          = null;
    private bool $preserveGlobalState                = false;
    private bool $inIsolation                        = false;
    private ?string $expectedException               = null;
    private ?string $expectedExceptionMessage        = null;
    private ?string $expectedExceptionMessageRegExp  = null;
    private null|int|string $expectedExceptionCode   = null;

    /**
     * @psalm-var list<ExecutionOrderDependency>
     */
    private array $providedTests = [];
    private array $data          = [];
    private int|string $dataName = '';
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @psalm-var non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private string $name;

    /**
     * @psalm-var list<string>
     */
    private array $groups = [];

    /**
     * @psalm-var list<ExecutionOrderDependency>
     */
    private array $dependencies    = [];
    private array $dependencyInput = [];

    /**
     * @psalm-var array<string,string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private array $iniSettings = [];
    private array $locale      = [];

    /**
     * @psalm-var list<MockObjectInternal>
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private array $iniSettings                  = [];
    private array $locale                       = [];
    private ?MockGenerator $mockObjectGenerator = null;

    /**
     * @psalm-var list<MockObject>
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private array $mockObjects                                    = [];
    private bool $registerMockObjectsFromTestArgumentsRecursively = false;
    private TestStatus $status;
    private int $numberOfAssertionsPerformed = 0;
    private mixed $testResult                = null;
    private string $output                   = '';
    private ?string $outputExpectedRegex     = null;
    private ?string $outputExpectedString    = null;
    private bool $outputBufferingActive      = false;
    private int $outputBufferingLevel;
    private bool $outputRetrievedForAssertion = false;
    private bool $doesNotPerformAssertions    = false;

    /**
     * @psalm-var list<Comparator>
     */
    private array $customComparators                         = [];
    private ?Event\Code\TestMethod $testValueObjectForEvents = null;
    private bool $wasPrepared                                = false;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-var array<class-string, true>
     */
    private array $failureTypes = [];

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */
    final public static function any(): AnyInvokedCountMatcher
    {
        return new AnyInvokedCountMatcher;
    }

    /**
     * Returns a matcher that matches when the method is never executed.
     */
    final public static function never(): InvokedCountMatcher
    {
        return new InvokedCountMatcher(0);
    }

    /**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */
    final public static function atLeast(int $requiredInvocations): InvokedAtLeastCountMatcher
    {
        return new InvokedAtLeastCountMatcher(
<<<<<<< HEAD
<<<<<<< HEAD
            $requiredInvocations,
=======
            $requiredInvocations
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $requiredInvocations
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * Returns a matcher that matches when the method is executed at least once.
     */
    final public static function atLeastOnce(): InvokedAtLeastOnceMatcher
    {
        return new InvokedAtLeastOnceMatcher;
    }

    /**
     * Returns a matcher that matches when the method is executed exactly once.
     */
    final public static function once(): InvokedCountMatcher
    {
        return new InvokedCountMatcher(1);
    }

    /**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */
    final public static function exactly(int $count): InvokedCountMatcher
    {
        return new InvokedCountMatcher($count);
    }

    /**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */
    final public static function atMost(int $allowedInvocations): InvokedAtMostCountMatcher
    {
        return new InvokedAtMostCountMatcher($allowedInvocations);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @deprecated Use <code>$double->willReturn()</code> instead of <code>$double->will($this->returnValue())</code>
     * @see https://github.com/sebastianbergmann/phpunit/issues/5423
     *
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    final public static function returnValue(mixed $value): ReturnStub
    {
        return new ReturnStub($value);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @deprecated Use <code>$double->willReturnMap()</code> instead of <code>$double->will($this->returnValueMap())</code>
     * @see https://github.com/sebastianbergmann/phpunit/issues/5423
     *
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    final public static function returnValueMap(array $valueMap): ReturnValueMapStub
    {
        return new ReturnValueMapStub($valueMap);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @deprecated Use <code>$double->willReturnArgument()</code> instead of <code>$double->will($this->returnArgument())</code>
     * @see https://github.com/sebastianbergmann/phpunit/issues/5423
     *
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    final public static function returnArgument(int $argumentIndex): ReturnArgumentStub
    {
        return new ReturnArgumentStub($argumentIndex);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @deprecated Use <code>$double->willReturnCallback()</code> instead of <code>$double->will($this->returnCallback())</code>
     * @see https://github.com/sebastianbergmann/phpunit/issues/5423
     *
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    final public static function returnCallback(callable $callback): ReturnCallbackStub
    {
        return new ReturnCallbackStub($callback);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @deprecated Use <code>$double->willReturnSelf()</code> instead of <code>$double->will($this->returnSelf())</code>
     * @see https://github.com/sebastianbergmann/phpunit/issues/5423
     *
     * @codeCoverageIgnore
=======
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    final public static function returnSelf(): ReturnSelfStub
    {
        return new ReturnSelfStub;
    }

    final public static function throwException(Throwable $exception): ExceptionStub
    {
        return new ExceptionStub($exception);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @deprecated Use <code>$double->willReturn()</code> instead of <code>$double->will($this->onConsecutiveCalls())</code>
     * @see https://github.com/sebastianbergmann/phpunit/issues/5423
     * @see https://github.com/sebastianbergmann/phpunit/issues/5425
     *
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    final public static function onConsecutiveCalls(mixed ...$arguments): ConsecutiveCallsStub
    {
        return new ConsecutiveCallsStub($arguments);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-empty-string $name
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function __construct(string $name)
    {
        $this->setName($name);

        $this->status = TestStatus::unknown();
    }

    /**
     * This method is called before the first test of this test class is run.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * This method is called after the last test of this test class is run.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * This method is called before each test.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function setUp(): void
    {
    }

    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function assertPreConditions(): void
    {
    }

    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function assertPostConditions(): void
    {
    }

    /**
     * This method is called after each test.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function tearDown(): void
    {
    }

    /**
     * Returns a string representation of the test case.
     *
     * @throws Exception
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function toString(): string
    {
        $buffer = sprintf(
            '%s::%s',
            (new ReflectionClass($this))->getName(),
<<<<<<< HEAD
<<<<<<< HEAD
            $this->name,
=======
            $this->name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return $buffer . $this->dataSetAsStringWithData();
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function count(): int
    {
        return 1;
    }

    final public function getActualOutputForAssertion(): string
    {
        $this->outputRetrievedForAssertion = true;

        return $this->output();
    }

    final public function expectOutputRegex(string $expectedRegex): void
    {
        $this->outputExpectedRegex = $expectedRegex;
    }

    final public function expectOutputString(string $expectedString): void
    {
        $this->outputExpectedString = $expectedString;
    }

    /**
     * @psalm-param class-string<Throwable> $exception
     */
    final public function expectException(string $exception): void
    {
        $this->expectedException = $exception;
    }

    final public function expectExceptionCode(int|string $code): void
    {
        $this->expectedExceptionCode = $code;
    }

    final public function expectExceptionMessage(string $message): void
    {
        $this->expectedExceptionMessage = $message;
    }

    final public function expectExceptionMessageMatches(string $regularExpression): void
    {
        $this->expectedExceptionMessageRegExp = $regularExpression;
    }

    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    final public function expectExceptionObject(\Exception $exception): void
    {
        $this->expectException($exception::class);
        $this->expectExceptionMessage($exception->getMessage());
        $this->expectExceptionCode($exception->getCode());
    }

    final public function expectNotToPerformAssertions(): void
    {
        $this->doesNotPerformAssertions = true;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function status(): TestStatus
    {
        return $this->status;
    }

    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws \PHPUnit\Util\Exception
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\Template\InvalidArgumentException
     * @throws CodeCoverageException
     * @throws Exception
     * @throws MoreThanOneDataSetFromDataProviderException
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @throws NoDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws NoDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws NoPreviousThrowableException
     * @throws ProcessIsolationException
     * @throws StaticAnalysisCacheNotConfiguredException
     * @throws UnintentionallyCoveredCodeException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function run(): void
    {
        if (!$this->handleDependencies()) {
            return;
        }

        if (!$this->shouldRunInSeparateProcess()) {
            (new TestRunner)->run($this);
        } else {
            (new TestRunner)->runInSeparateProcess(
                $this,
                $this->runClassInSeparateProcess && !$this->runTestInSeparateProcess,
<<<<<<< HEAD
<<<<<<< HEAD
                $this->preserveGlobalState,
=======
                $this->preserveGlobalState
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->preserveGlobalState
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $className
     *
     * @psalm-return MockBuilder<RealInstanceType>
     */
    final public function getMockBuilder(string $className): MockBuilder
    {
        return new MockBuilder($this, $className);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    final public function registerComparator(Comparator $comparator): void
    {
        ComparatorFactory::getInstance()->register($comparator);

        Event\Facade::emitter()->testRegisteredComparator($comparator::class);

        $this->customComparators[] = $comparator;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function groups(): array
    {
        return $this->groups;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setGroups(array $groups): void
    {
        $this->groups = $groups;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function nameWithDataSet(): string
    {
        return $this->name . $this->dataSetAsString();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-return non-empty-string
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function name(): string
    {
        return $this->name;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function size(): TestSize
    {
        return (new Groups)->size(
            static::class,
<<<<<<< HEAD
<<<<<<< HEAD
            $this->name,
=======
            $this->name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
<<<<<<< HEAD
<<<<<<< HEAD
    final public function hasUnexpectedOutput(): bool
=======
    final public function hasOutput(): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    final public function hasOutput(): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($this->output === '') {
            return false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->expectsOutput()) {
=======
        if ($this->hasExpectationOnOutput()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if ($this->hasExpectationOnOutput()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return false;
        }

        return true;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function output(): string
    {
        if (!$this->outputBufferingActive) {
            return $this->output;
        }

        return (string) ob_get_contents();
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function doesNotPerformAssertions(): bool
    {
        return $this->doesNotPerformAssertions;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
<<<<<<< HEAD
<<<<<<< HEAD
    final public function expectsOutput(): bool
    {
        return $this->hasExpectationOnOutput() || $this->outputRetrievedForAssertion;
=======
    final public function hasExpectationOnOutput(): bool
    {
        return is_string($this->outputExpectedString) || is_string($this->outputExpectedRegex) || $this->outputRetrievedForAssertion;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    final public function hasExpectationOnOutput(): bool
    {
        return is_string($this->outputExpectedString) || is_string($this->outputExpectedRegex) || $this->outputRetrievedForAssertion;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @deprecated
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    final public function registerMockObjectsFromTestArgumentsRecursively(): void
    {
        $this->registerMockObjectsFromTestArgumentsRecursively = true;
    }

    /**
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function runBare(): void
    {
        $emitter = Event\Facade::emitter();

        $emitter->testPreparationStarted(
<<<<<<< HEAD
<<<<<<< HEAD
            $this->valueObjectForEvents(),
=======
            $this->valueObjectForEvents()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->valueObjectForEvents()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->snapshotGlobalState();
        $this->startOutputBuffering();
        clearstatcache();

        $hookMethods                       = (new HookMethods)->hookMethods(static::class);
        $hasMetRequirements                = false;
        $this->numberOfAssertionsPerformed = 0;
        $currentWorkingDirectory           = getcwd();

        try {
            $this->checkRequirements();
            $hasMetRequirements = true;

            if ($this->inIsolation) {
<<<<<<< HEAD
<<<<<<< HEAD
                // @codeCoverageIgnoreStart
                $this->invokeBeforeClassHookMethods($hookMethods, $emitter);
                // @codeCoverageIgnoreEnd
            }

            if (method_exists(static::class, $this->name) &&
                MetadataRegistry::parser()->forClassAndMethod(static::class, $this->name)->isDoesNotPerformAssertions()->isNotEmpty()) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $this->invokeBeforeClassHookMethods($hookMethods, $emitter);
            }

            if (method_exists(static::class, $this->name) &&
                MetadataRegistry::parser()->forMethod(static::class, $this->name)->isDoesNotPerformAssertions()->isNotEmpty()) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $this->doesNotPerformAssertions = true;
            }

            $this->invokeBeforeTestHookMethods($hookMethods, $emitter);
            $this->invokePreConditionHookMethods($hookMethods, $emitter);

            $emitter->testPrepared(
<<<<<<< HEAD
<<<<<<< HEAD
                $this->valueObjectForEvents(),
=======
                $this->valueObjectForEvents()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->valueObjectForEvents()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $this->wasPrepared = true;
            $this->testResult  = $this->runTest();

            $this->verifyMockObjects();
            $this->invokePostConditionHookMethods($hookMethods, $emitter);

            $this->status = TestStatus::success();
        } catch (IncompleteTest $e) {
            $this->status = TestStatus::incomplete($e->getMessage());

            $emitter->testMarkedAsIncomplete(
                $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                Event\Code\ThrowableBuilder::from($e),
=======
                Event\Code\Throwable::from($e)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                Event\Code\Throwable::from($e)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } catch (SkippedTest $e) {
            $this->status = TestStatus::skipped($e->getMessage());

            $emitter->testSkipped(
                $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                $e->getMessage(),
            );
        } catch (AssertionError|AssertionFailedError $e) {
            if (!$this->wasPrepared) {
                $this->wasPrepared = true;

                $emitter->testPreparationFailed(
                    $this->valueObjectForEvents(),
                );
            }

=======
                $e->getMessage()
            );
        } catch (AssertionError|AssertionFailedError $e) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $e->getMessage()
            );
        } catch (AssertionError|AssertionFailedError $e) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->status = TestStatus::failure($e->getMessage());

            $emitter->testFailed(
                $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                Event\Code\ThrowableBuilder::from($e),
                Event\Code\ComparisonFailureBuilder::from($e),
=======
                Event\Code\Throwable::from($e),
                Event\Code\ComparisonFailure::from($e)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                Event\Code\Throwable::from($e),
                Event\Code\ComparisonFailure::from($e)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } catch (TimeoutException $e) {
            $this->status = TestStatus::risky($e->getMessage());
        } catch (Throwable $_e) {
<<<<<<< HEAD
<<<<<<< HEAD
            if ($this->isRegisteredFailure($_e)) {
                $this->status = TestStatus::failure($_e->getMessage());

                $emitter->testFailed(
                    $this->valueObjectForEvents(),
                    Event\Code\ThrowableBuilder::from($_e),
                    null,
                );
            } else {
                $e = $this->transformException($_e);

                $this->status = TestStatus::error($e->getMessage());

                $emitter->testErrored(
                    $this->valueObjectForEvents(),
                    Event\Code\ThrowableBuilder::from($e),
                );
            }
        }

        $outputBufferingStopped = false;

        if (!isset($e) &&
            $this->hasExpectationOnOutput() &&
            $this->stopOutputBuffering()) {
            $outputBufferingStopped = true;

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $e            = $_e;
            $this->status = TestStatus::error($_e->getMessage());

            $emitter->testErrored(
                $this->valueObjectForEvents(),
                Event\Code\Throwable::from($_e)
            );
        }

        if ($this->stopOutputBuffering() && !isset($e)) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->performAssertionsOnOutput();
        }

        if ($this->status->isSuccess()) {
<<<<<<< HEAD
<<<<<<< HEAD
            $emitter->testPassed(
=======
            Event\Facade::emitter()->testPassed(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            Event\Facade::emitter()->testPassed(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $this->valueObjectForEvents(),
            );

            if (!$this->usesDataProvider()) {
                PassedTests::instance()->testMethodPassed(
                    $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                    $this->testResult,
=======
                    $this->testResult
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $this->testResult
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        try {
            $this->mockObjects = [];
        } catch (Throwable $t) {
            Event\Facade::emitter()->testErrored(
                $this->valueObjectForEvents(),
                Event\Code\ThrowableBuilder::from($t),
            );
        }
=======
        $this->mockObjects = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->mockObjects = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        // Tear down the fixture. An exception raised in tearDown() will be
        // caught and passed on when no exception was raised before.
        try {
            if ($hasMetRequirements) {
                $this->invokeAfterTestHookMethods($hookMethods, $emitter);

                if ($this->inIsolation) {
<<<<<<< HEAD
<<<<<<< HEAD
                    // @codeCoverageIgnoreStart
                    $this->invokeAfterClassHookMethods($hookMethods, $emitter);
                    // @codeCoverageIgnoreEnd
                }
            }
        } catch (AssertionError|AssertionFailedError $e) {
            $this->status = TestStatus::failure($e->getMessage());

            $emitter->testFailed(
                $this->valueObjectForEvents(),
                Event\Code\ThrowableBuilder::from($e),
                Event\Code\ComparisonFailureBuilder::from($e),
            );
=======
                    $this->invokeAfterClassHookMethods($hookMethods, $emitter);
                }
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $this->invokeAfterClassHookMethods($hookMethods, $emitter);
                }
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (Throwable $exceptionRaisedDuringTearDown) {
            if (!isset($e)) {
                $this->status = TestStatus::error($exceptionRaisedDuringTearDown->getMessage());
                $e            = $exceptionRaisedDuringTearDown;

                $emitter->testErrored(
                    $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                    Event\Code\ThrowableBuilder::from($exceptionRaisedDuringTearDown),
=======
                    Event\Code\Throwable::from($exceptionRaisedDuringTearDown)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    Event\Code\Throwable::from($exceptionRaisedDuringTearDown)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (!$outputBufferingStopped) {
            $this->stopOutputBuffering();
        }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        clearstatcache();

        if ($currentWorkingDirectory !== getcwd()) {
            chdir($currentWorkingDirectory);
        }

        $this->restoreGlobalState();
        $this->unregisterCustomComparators();
        $this->cleanupIniSettings();
        $this->cleanupLocaleSettings();
        libxml_clear_errors();

        $this->testValueObjectForEvents = null;

        if (isset($e)) {
            $this->onNotSuccessfulTest($e);
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-empty-string $name
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setName(string $name): void
    {
        $this->name = $name;

        if (is_callable($this->sortId(), true)) {
            $this->providedTests = [new ExecutionOrderDependency($this->sortId())];
        }
    }

    /**
     * @psalm-param list<ExecutionOrderDependency> $dependencies
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setDependencies(array $dependencies): void
    {
        $this->dependencies = $dependencies;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    final public function setDependencyInput(array $dependencyInput): void
    {
        $this->dependencyInput = $dependencyInput;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function dependencyInput(): array
    {
        return $this->dependencyInput;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function hasDependencyInput(): bool
    {
        return !empty($this->dependencyInput);
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setBackupGlobals(bool $backupGlobals): void
    {
        $this->backupGlobals = $backupGlobals;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setBackupGlobalsExcludeList(array $backupGlobalsExcludeList): void
    {
        $this->backupGlobalsExcludeList = $backupGlobalsExcludeList;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setBackupStaticProperties(bool $backupStaticProperties): void
    {
        $this->backupStaticProperties = $backupStaticProperties;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setBackupStaticPropertiesExcludeList(array $backupStaticPropertiesExcludeList): void
    {
        $this->backupStaticPropertiesExcludeList = $backupStaticPropertiesExcludeList;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess): void
    {
        if ($this->runTestInSeparateProcess === null) {
            $this->runTestInSeparateProcess = $runTestInSeparateProcess;
        }
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess): void
    {
        $this->runClassInSeparateProcess = $runClassInSeparateProcess;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setPreserveGlobalState(bool $preserveGlobalState): void
    {
        $this->preserveGlobalState = $preserveGlobalState;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    final public function setInIsolation(bool $inIsolation): void
    {
        $this->inIsolation = $inIsolation;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    final public function isInIsolation(): bool
    {
        return $this->inIsolation;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    final public function result(): mixed
    {
        return $this->testResult;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setResult(mixed $result): void
    {
        $this->testResult = $result;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function registerMockObject(MockObject $mockObject): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        assert($mockObject instanceof MockObjectInternal);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->mockObjects[] = $mockObject;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function addToAssertionCount(int $count): void
    {
        $this->numberOfAssertionsPerformed += $count;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function numberOfAssertionsPerformed(): int
    {
        return $this->numberOfAssertionsPerformed;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function usesDataProvider(): bool
    {
        return !empty($this->data);
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function dataName(): int|string
    {
        return $this->dataName;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function dataSetAsString(): string
    {
        $buffer = '';

        if (!empty($this->data)) {
            if (is_int($this->dataName)) {
                $buffer .= sprintf(' with data set #%d', $this->dataName);
            } else {
                $buffer .= sprintf(' with data set "%s"', $this->dataName);
            }
        }

        return $buffer;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function dataSetAsStringWithData(): string
    {
        if (empty($this->data)) {
            return '';
        }

        return $this->dataSetAsString() . sprintf(
            ' (%s)',
<<<<<<< HEAD
<<<<<<< HEAD
            (new Exporter)->shortenedRecursiveExport($this->data),
=======
            (new Exporter)->shortenedRecursiveExport($this->data)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            (new Exporter)->shortenedRecursiveExport($this->data)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function providedData(): array
    {
        return $this->data;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function sortId(): string
    {
        $id = $this->name;

        if (!str_contains($id, '::')) {
            $id = static::class . '::' . $id;
        }

        if ($this->usesDataProvider()) {
            $id .= $this->dataSetAsString();
        }

        return $id;
    }

    /**
     * @psalm-return list<ExecutionOrderDependency>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function provides(): array
    {
        return $this->providedTests;
    }

    /**
     * @psalm-return list<ExecutionOrderDependency>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function requires(): array
    {
        return $this->dependencies;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws RuntimeException
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function setData(int|string $dataName, array $data): void
    {
        $this->dataName = $dataName;
        $this->data     = $data;
<<<<<<< HEAD
<<<<<<< HEAD

        if (array_is_list($data)) {
            return;
        }

        try {
            $reflector  = new ReflectionMethod($this, $this->name);
            $parameters = array_map(static fn (ReflectionParameter $parameter) => $parameter->name, $reflector->getParameters());

            foreach (array_keys($data) as $parameter) {
                if (is_string($parameter) && !in_array($parameter, $parameters, true)) {
                    Event\Facade::emitter()->testTriggeredPhpunitDeprecation(
                        $this->valueObjectForEvents(),
                        sprintf(
                            'Providing invalid named argument $%s for method %s::%s() is deprecated and will not be supported in PHPUnit 11.0.',
                            $parameter,
                            $this::class,
                            $this->name,
                        ),
                    );
                }
            }
            // @codeCoverageIgnoreStart
        } catch (ReflectionException $e) {
            throw new RuntimeException(
                $e->getMessage(),
                $e->getCode(),
                $e,
            );
        }
        // @codeCoverageIgnoreEnd
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     *
     * @throws MoreThanOneDataSetFromDataProviderException
     */
    final public function valueObjectForEvents(): Event\Code\TestMethod
    {
        if ($this->testValueObjectForEvents !== null) {
            return $this->testValueObjectForEvents;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->testValueObjectForEvents = Event\Code\TestMethodBuilder::fromTestCase($this);
=======
        $this->testValueObjectForEvents = Event\Code\TestMethod::fromTestCase($this);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->testValueObjectForEvents = Event\Code\TestMethod::fromTestCase($this);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this->testValueObjectForEvents;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    final public function wasPrepared(): bool
    {
        return $this->wasPrepared;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    final protected function registerComparator(Comparator $comparator): void
    {
        ComparatorFactory::getInstance()->register($comparator);

        Event\Facade::emitter()->testRegisteredComparator($comparator::class);

        $this->customComparators[] = $comparator;
    }

    /**
     * @psalm-param class-string $classOrInterface
     */
    final protected function registerFailureType(string $classOrInterface): void
    {
        $this->failureTypes[$classOrInterface] = true;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    protected function runTest(): mixed
    {
        $testArguments = array_merge($this->data, $this->dependencyInput);

        $this->registerMockObjectsFromTestArguments($testArguments);

        try {
            $testResult = $this->{$this->name}(...array_values($testArguments));
        } catch (Throwable $exception) {
            if (!$this->shouldExceptionExpectationsBeVerified($exception)) {
                throw $exception;
            }

            $this->verifyExceptionExpectations($exception);

            return null;
        }

        $this->expectedExceptionWasNotRaised();

        return $testResult;
    }

    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5214
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function iniSet(string $varName, string $newValue): void
    {
        $currentValue = ini_set($varName, $newValue);

        if ($currentValue !== false) {
            $this->iniSettings[$varName] = $currentValue;
        } else {
            throw new Exception(
                sprintf(
                    'INI setting "%s" could not be set to "%s".',
                    $varName,
<<<<<<< HEAD
<<<<<<< HEAD
                    $newValue,
                ),
=======
                    $newValue
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $newValue
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5216
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function setLocale(mixed ...$arguments): void
    {
        if (count($arguments) < 2) {
            throw new Exception;
        }

        [$category, $locale] = $arguments;

        if (!in_array($category, self::LOCALE_CATEGORIES, true)) {
            throw new Exception;
        }

        if (!is_array($locale) && !is_string($locale)) {
            throw new Exception;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->locale[$category] = setlocale($category, '0');
=======
        $this->locale[$category] = setlocale($category, 0);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->locale[$category] = setlocale($category, 0);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $result = setlocale(...$arguments);

        if ($result === false) {
            throw new Exception(
                'The locale functionality is not implemented on your platform, ' .
                'the specified locale does not exist or the category name is ' .
<<<<<<< HEAD
<<<<<<< HEAD
                'invalid.',
=======
                'invalid.'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                'invalid.'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Creates a test stub for the specified interface or class.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return Stub&RealInstanceType
     *
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
     * @throws NoPreviousThrowableException
     */
    protected function createStub(string $originalClassName): Stub
    {
        $stub = $this->createMockObject($originalClassName, false);

        Event\Facade::emitter()->testCreatedStub($originalClassName);

        return $stub;
    }

    /**
     * @psalm-param list<class-string> $interfaces
     *
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    protected function createStubForIntersectionOfInterfaces(array $interfaces): Stub
    {
        $stub = $this->getMockObjectGenerator()->getMockForInterfaces($interfaces);

        Event\Facade::emitter()->testCreatedStubForIntersectionOfInterfaces($interfaces);

        return $stub;
    }

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Creates a mock object for the specified interface or class.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws MockObjectException
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws NoPreviousThrowableException
     */
    protected function createMock(string $originalClassName): MockObject
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $mock = (new MockGenerator)->testDouble(
            $originalClassName,
            true,
            callOriginalConstructor: false,
            callOriginalClone: false,
            cloneArguments: false,
            allowMockingUnknownTypes: false,
        );

        assert($mock instanceof $originalClassName);
        assert($mock instanceof MockObject);

        $this->registerMockObject($mock);
=======
        $mock = $this->createMockObject($originalClassName);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $mock = $this->createMockObject($originalClassName);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        Event\Facade::emitter()->testCreatedMockObject($originalClassName);

        return $mock;
    }

    /**
     * @psalm-param list<class-string> $interfaces
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws MockObjectException
     */
    protected function createMockForIntersectionOfInterfaces(array $interfaces): MockObject
    {
        $mock = (new MockGenerator)->testDoubleForInterfaceIntersection($interfaces, true);

        assert($mock instanceof MockObject);

        $this->registerMockObject($mock);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    protected function createMockForIntersectionOfInterfaces(array $interfaces): MockObject
    {
        $mock = $this->getMockObjectGenerator()->getMockForInterfaces($interfaces);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        Event\Facade::emitter()->testCreatedMockObjectForIntersectionOfInterfaces($interfaces);

        return $mock;
    }

    /**
     * Creates (and configures) a mock object for the specified interface or class.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws MockObjectException
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws NoPreviousThrowableException
     */
    protected function createConfiguredMock(string $originalClassName, array $configuration): MockObject
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $o = $this->createMock($originalClassName);
=======
        $o = $this->createMockObject($originalClassName);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $o = $this->createMockObject($originalClassName);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        foreach ($configuration as $method => $return) {
            $o->method($method)->willReturn($return);
        }

        return $o;
    }

    /**
     * Creates a partial mock object for the specified interface or class.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param list<non-empty-string> $methods
=======
     * @psalm-param list<string> $methods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @psalm-param list<string> $methods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws MockObjectException
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function createPartialMock(string $originalClassName, array $methods): MockObject
    {
        $partialMock = $this->getMockBuilder($originalClassName)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->onlyMethods($methods)
            ->getMock();

        Event\Facade::emitter()->testCreatedPartialMockObject(
            $originalClassName,
<<<<<<< HEAD
<<<<<<< HEAD
            ...$methods,
=======
            ...$methods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            ...$methods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return $partialMock;
    }

    /**
     * Creates a test proxy for the specified class.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws MockObjectException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5240
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function createTestProxy(string $originalClassName, array $constructorArguments = []): MockObject
    {
        $testProxy = $this->getMockBuilder($originalClassName)
            ->setConstructorArgs($constructorArguments)
            ->enableProxyingToOriginalMethods()
            ->getMock();

        Event\Facade::emitter()->testCreatedTestProxy(
            $originalClassName,
<<<<<<< HEAD
<<<<<<< HEAD
            $constructorArguments,
=======
            $constructorArguments
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $constructorArguments
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return $testProxy;
    }

    /**
     * Creates a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws MockObjectException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5241
     */
    protected function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false): MockObject
    {
        $mockObject = (new MockGenerator)->mockObjectForAbstractClass(
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
     */
    protected function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false): MockObject
    {
        $mockObject = $this->getMockObjectGenerator()->getMockForAbstractClass(
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $originalClassName,
            $arguments,
            $mockClassName,
            $callOriginalConstructor,
            $callOriginalClone,
            $callAutoload,
            $mockedMethods,
<<<<<<< HEAD
<<<<<<< HEAD
            $cloneArguments,
=======
            $cloneArguments
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $cloneArguments
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->registerMockObject($mockObject);

        Event\Facade::emitter()->testCreatedMockObjectForAbstractClass($originalClassName);

<<<<<<< HEAD
<<<<<<< HEAD
        assert($mockObject instanceof $originalClassName);
        assert($mockObject instanceof MockObject);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $mockObject;
    }

    /**
     * Creates a mock object based on the given WSDL file.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws MockObjectException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5242
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
     * @throws \PHPUnit\Framework\MockObject\Exception
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function getMockFromWsdl(string $wsdlFile, string $originalClassName = '', string $mockClassName = '', array $methods = [], bool $callOriginalConstructor = true, array $options = []): MockObject
    {
        if ($originalClassName === '') {
            $fileName          = pathinfo(basename(parse_url($wsdlFile, PHP_URL_PATH)), PATHINFO_FILENAME);
            $originalClassName = preg_replace('/\W/', '', $fileName);
        }

        if (!class_exists($originalClassName)) {
            eval(
<<<<<<< HEAD
<<<<<<< HEAD
                (new MockGenerator)->generateClassFromWsdl(
                    $wsdlFile,
                    $originalClassName,
                    $methods,
                    $options,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $this->getMockObjectGenerator()->generateClassFromWsdl(
                    $wsdlFile,
                    $originalClassName,
                    $methods,
                    $options
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                )
            );
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $mockObject = (new MockGenerator)->testDouble(
            $originalClassName,
            true,
=======
        $mockObject = $this->getMockObjectGenerator()->getMock(
            $originalClassName,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $mockObject = $this->getMockObjectGenerator()->getMock(
            $originalClassName,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $methods,
            ['', $options],
            $mockClassName,
            $callOriginalConstructor,
            false,
<<<<<<< HEAD
<<<<<<< HEAD
            false,
=======
            false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        Event\Facade::emitter()->testCreatedMockObjectFromWsdl(
            $wsdlFile,
            $originalClassName,
            $mockClassName,
            $methods,
            $callOriginalConstructor,
<<<<<<< HEAD
<<<<<<< HEAD
            $options,
        );

        assert($mockObject instanceof MockObject);

=======
            $options
        );

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $options
        );

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->registerMockObject($mockObject);

        return $mockObject;
    }

    /**
     * Creates a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @psalm-param trait-string $traitName
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws MockObjectException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5243
     */
    protected function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false): MockObject
    {
        $mockObject = (new MockGenerator)->mockObjectForTrait(
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
     */
    protected function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false): MockObject
    {
        $mockObject = $this->getMockObjectGenerator()->getMockForTrait(
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $traitName,
            $arguments,
            $mockClassName,
            $callOriginalConstructor,
            $callOriginalClone,
            $callAutoload,
            $mockedMethods,
<<<<<<< HEAD
<<<<<<< HEAD
            $cloneArguments,
=======
            $cloneArguments
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $cloneArguments
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->registerMockObject($mockObject);

        Event\Facade::emitter()->testCreatedMockObjectForTrait($traitName);

        return $mockObject;
    }

    /**
     * Creates an object that uses the specified trait.
     *
     * @psalm-param trait-string $traitName
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws MockObjectException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5244
     */
    protected function getObjectForTrait(string $traitName, array $arguments = [], string $traitClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true): object
    {
        return (new MockGenerator)->objectForTrait(
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    protected function getObjectForTrait(string $traitName, array $arguments = [], string $traitClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true): object
    {
        return $this->getMockObjectGenerator()->getObjectForTrait(
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $traitName,
            $traitClassName,
            $callAutoload,
            $callOriginalConstructor,
<<<<<<< HEAD
<<<<<<< HEAD
            $arguments,
        );
    }

    protected function transformException(Throwable $t): Throwable
    {
        return $t;
    }

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $arguments
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    protected function onNotSuccessfulTest(Throwable $t): never
    {
        throw $t;
    }

    /**
     * @throws Throwable
     */
    private function verifyMockObjects(): void
    {
        foreach ($this->mockObjects as $mockObject) {
            if ($mockObject->__phpunit_hasMatchers()) {
                $this->numberOfAssertionsPerformed++;
            }

            $mockObject->__phpunit_verify(
<<<<<<< HEAD
<<<<<<< HEAD
                $this->shouldInvocationMockerBeReset($mockObject),
=======
                $this->shouldInvocationMockerBeReset($mockObject)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->shouldInvocationMockerBeReset($mockObject)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * @throws SkippedTest
     */
    private function checkRequirements(): void
    {
        if (!$this->name || !method_exists($this, $this->name)) {
            return;
        }

        $missingRequirements = (new Requirements)->requirementsNotSatisfiedFor(
            static::class,
<<<<<<< HEAD
<<<<<<< HEAD
            $this->name,
=======
            $this->name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        if (!empty($missingRequirements)) {
            $this->markTestSkipped(implode(PHP_EOL, $missingRequirements));
        }
    }

    private function handleDependencies(): bool
    {
        if ([] === $this->dependencies || $this->inIsolation) {
            return true;
        }

        $passedTests = PassedTests::instance();

        foreach ($this->dependencies as $dependency) {
            if (!$dependency->isValid()) {
                $this->markErrorForInvalidDependency();

                return false;
            }

            if ($dependency->targetIsClass()) {
                $dependencyClassName = $dependency->getTargetClassName();

                if (!class_exists($dependencyClassName)) {
                    $this->markErrorForInvalidDependency($dependency);

                    return false;
                }

                if (!$passedTests->hasTestClassPassed($dependencyClassName)) {
                    $this->markSkippedForMissingDependency($dependency);

                    return false;
                }

                continue;
            }

            $dependencyTarget = $dependency->getTarget();

            if (!$passedTests->hasTestMethodPassed($dependencyTarget)) {
                if (!$this->isCallableTestMethod($dependencyTarget)) {
                    $this->markErrorForInvalidDependency($dependency);
                } else {
                    $this->markSkippedForMissingDependency($dependency);
                }

                return false;
            }

            if ($passedTests->isGreaterThan($dependencyTarget, $this->size())) {
                Event\Facade::emitter()->testConsideredRisky(
                    $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                    'This test depends on a test that is larger than itself',
=======
                    'This test depends on a test that is larger than itself'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'This test depends on a test that is larger than itself'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                return false;
            }

            $returnValue = $passedTests->returnValue($dependencyTarget);

            if ($dependency->deepClone()) {
                $deepCopy = new DeepCopy;
                $deepCopy->skipUncloneable(false);

                $this->dependencyInput[$dependencyTarget] = $deepCopy->copy($returnValue);
            } elseif ($dependency->shallowClone()) {
                $this->dependencyInput[$dependencyTarget] = clone $returnValue;
            } else {
                $this->dependencyInput[$dependencyTarget] = $returnValue;
            }
        }

        $this->testValueObjectForEvents = null;

        return true;
    }

    /**
     * @throws Exception
     * @throws MoreThanOneDataSetFromDataProviderException
     * @throws NoPreviousThrowableException
     */
    private function markErrorForInvalidDependency(?ExecutionOrderDependency $dependency = null): void
    {
        $message = 'This test has an invalid dependency';

        if ($dependency !== null) {
            $message = sprintf(
                'This test depends on "%s" which does not exist',
<<<<<<< HEAD
<<<<<<< HEAD
                $dependency->targetIsClass() ? $dependency->getTargetClassName() : $dependency->getTarget(),
=======
                $dependency->targetIsClass() ? $dependency->getTargetClassName() : $dependency->getTarget()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $dependency->targetIsClass() ? $dependency->getTargetClassName() : $dependency->getTarget()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $exception = new InvalidDependencyException($message);

        Event\Facade::emitter()->testErrored(
            $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
            Event\Code\ThrowableBuilder::from($exception),
=======
            Event\Code\Throwable::from($exception)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            Event\Code\Throwable::from($exception)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->status = TestStatus::error($message);
    }

    /**
     * @throws MoreThanOneDataSetFromDataProviderException
     */
    private function markSkippedForMissingDependency(ExecutionOrderDependency $dependency): void
    {
        $message = sprintf(
            'This test depends on "%s" to pass',
<<<<<<< HEAD
<<<<<<< HEAD
            $dependency->getTarget(),
=======
            $dependency->getTarget()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $dependency->getTarget()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        Event\Facade::emitter()->testSkipped(
            $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
            $message,
=======
            $message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->status = TestStatus::skipped($message);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Get the mock object generator, creating it if it doesn't exist.
     */
    private function getMockObjectGenerator(): MockGenerator
    {
        if ($this->mockObjectGenerator === null) {
            $this->mockObjectGenerator = new MockGenerator;
        }

        return $this->mockObjectGenerator;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function startOutputBuffering(): void
    {
        ob_start();

        $this->outputBufferingActive = true;
        $this->outputBufferingLevel  = ob_get_level();
    }

    /**
     * @throws MoreThanOneDataSetFromDataProviderException
     */
    private function stopOutputBuffering(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $bufferingLevel = ob_get_level();

        if ($bufferingLevel !== $this->outputBufferingLevel) {
            if ($bufferingLevel > $this->outputBufferingLevel) {
                $message = 'Test code or tested code did not close its own output buffers';
            } else {
                $message = 'Test code or tested code closed output buffers other than its own';
            }

=======
        if (ob_get_level() !== $this->outputBufferingLevel) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (ob_get_level() !== $this->outputBufferingLevel) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            while (ob_get_level() >= $this->outputBufferingLevel) {
                ob_end_clean();
            }

<<<<<<< HEAD
<<<<<<< HEAD
            Event\Facade::emitter()->testConsideredRisky(
                $this->valueObjectForEvents(),
                $message,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $message = 'Test code or tested code did not (only) close its own output buffers';

            Event\Facade::emitter()->testConsideredRisky(
                $this->valueObjectForEvents(),
                $message
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $this->status = TestStatus::risky($message);

            return false;
        }

        $this->output = ob_get_clean();

        $this->outputBufferingActive = false;
        $this->outputBufferingLevel  = ob_get_level();

        return true;
    }

    private function snapshotGlobalState(): void
    {
        if ($this->runTestInSeparateProcess || $this->inIsolation ||
            (!$this->backupGlobals && !$this->backupStaticProperties)) {
            return;
        }

        $snapshot = $this->createGlobalStateSnapshot($this->backupGlobals === true);

        $this->snapshot = $snapshot;
    }

    /**
     * @throws MoreThanOneDataSetFromDataProviderException
     */
    private function restoreGlobalState(): void
    {
        if (!$this->snapshot instanceof Snapshot) {
            return;
        }

        if (ConfigurationRegistry::get()->beStrictAboutChangesToGlobalState()) {
            $this->compareGlobalStateSnapshots(
                $this->snapshot,
<<<<<<< HEAD
<<<<<<< HEAD
                $this->createGlobalStateSnapshot($this->backupGlobals === true),
=======
                $this->createGlobalStateSnapshot($this->backupGlobals === true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->createGlobalStateSnapshot($this->backupGlobals === true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $restorer = new Restorer;

        if ($this->backupGlobals) {
            $restorer->restoreGlobalVariables($this->snapshot);
        }

        if ($this->backupStaticProperties) {
            $restorer->restoreStaticProperties($this->snapshot);
        }

        $this->snapshot = null;
    }

    private function createGlobalStateSnapshot(bool $backupGlobals): Snapshot
    {
        $excludeList = new GlobalStateExcludeList;

        foreach ($this->backupGlobalsExcludeList as $globalVariable) {
            $excludeList->addGlobalVariable($globalVariable);
        }

        if (!defined('PHPUNIT_TESTSUITE')) {
            $excludeList->addClassNamePrefix('PHPUnit');
            $excludeList->addClassNamePrefix('SebastianBergmann\CodeCoverage');
            $excludeList->addClassNamePrefix('SebastianBergmann\FileIterator');
            $excludeList->addClassNamePrefix('SebastianBergmann\Invoker');
            $excludeList->addClassNamePrefix('SebastianBergmann\Template');
            $excludeList->addClassNamePrefix('SebastianBergmann\Timer');
            $excludeList->addStaticProperty(ComparatorFactory::class, 'instance');

            foreach ($this->backupStaticPropertiesExcludeList as $class => $properties) {
                foreach ($properties as $property) {
                    $excludeList->addStaticProperty($class, $property);
                }
            }
        }

        return new Snapshot(
            $excludeList,
            $backupGlobals,
            (bool) $this->backupStaticProperties,
            false,
            false,
            false,
            false,
            false,
            false,
<<<<<<< HEAD
<<<<<<< HEAD
            false,
=======
            false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @throws MoreThanOneDataSetFromDataProviderException
     */
    private function compareGlobalStateSnapshots(Snapshot $before, Snapshot $after): void
    {
        $backupGlobals = $this->backupGlobals === null || $this->backupGlobals;

        if ($backupGlobals) {
            $this->compareGlobalStateSnapshotPart(
                $before->globalVariables(),
                $after->globalVariables(),
<<<<<<< HEAD
<<<<<<< HEAD
                "--- Global variables before the test\n+++ Global variables after the test\n",
=======
                "--- Global variables before the test\n+++ Global variables after the test\n"
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                "--- Global variables before the test\n+++ Global variables after the test\n"
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $this->compareGlobalStateSnapshotPart(
                $before->superGlobalVariables(),
                $after->superGlobalVariables(),
<<<<<<< HEAD
<<<<<<< HEAD
                "--- Super-global variables before the test\n+++ Super-global variables after the test\n",
=======
                "--- Super-global variables before the test\n+++ Super-global variables after the test\n"
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                "--- Super-global variables before the test\n+++ Super-global variables after the test\n"
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($this->backupStaticProperties) {
            $this->compareGlobalStateSnapshotPart(
                $before->staticProperties(),
                $after->staticProperties(),
<<<<<<< HEAD
<<<<<<< HEAD
                "--- Static properties before the test\n+++ Static properties after the test\n",
=======
                "--- Static properties before the test\n+++ Static properties after the test\n"
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                "--- Static properties before the test\n+++ Static properties after the test\n"
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * @throws MoreThanOneDataSetFromDataProviderException
     */
    private function compareGlobalStateSnapshotPart(array $before, array $after, string $header): void
    {
        if ($before != $after) {
            $differ   = new Differ(new UnifiedDiffOutputBuilder($header));
            $exporter = new Exporter;

            Event\Facade::emitter()->testConsideredRisky(
                $this->valueObjectForEvents(),
                'This test modified global state but was not expected to do so' . PHP_EOL .
                trim(
                    $differ->diff(
                        $exporter->export($before),
<<<<<<< HEAD
<<<<<<< HEAD
                        $exporter->export($after),
                    ),
                ),
=======
                        $exporter->export($after)
                    )
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                        $exporter->export($after)
                    )
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    private function shouldInvocationMockerBeReset(MockObject $mock): bool
    {
        $enumerator = new Enumerator;

        if (in_array($mock, $enumerator->enumerate($this->dependencyInput), true)) {
            return false;
        }

        if (!is_array($this->testResult) && !is_object($this->testResult)) {
            return true;
        }

        return !in_array($mock, $enumerator->enumerate($this->testResult), true);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @deprecated
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function registerMockObjectsFromTestArguments(array $testArguments, Context $context = new Context): void
    {
        if ($this->registerMockObjectsFromTestArgumentsRecursively) {
            foreach ((new Enumerator)->enumerate($testArguments) as $object) {
                if ($object instanceof MockObject) {
                    $this->registerMockObject($object);
                }
            }
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
            foreach ($testArguments as &$testArgument) {
=======
            foreach ($testArguments as $testArgument) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            foreach ($testArguments as $testArgument) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                if ($testArgument instanceof MockObject) {
                    $testArgument = Cloner::clone($testArgument);

                    $this->registerMockObject($testArgument);
                } elseif (is_array($testArgument) && !$context->contains($testArgument)) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $testArgumentCopy = $testArgument;
                    $context->add($testArgument);

                    $this->registerMockObjectsFromTestArguments(
                        $testArgumentCopy,
                        $context,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $context->add($testArgument);

                    $this->registerMockObjectsFromTestArguments(
                        $testArgument,
                        $context
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }
        }
    }

    private function unregisterCustomComparators(): void
    {
        $factory = ComparatorFactory::getInstance();

        foreach ($this->customComparators as $comparator) {
            $factory->unregister($comparator);
        }

        $this->customComparators = [];
    }

    private function cleanupIniSettings(): void
    {
        foreach ($this->iniSettings as $varName => $oldValue) {
            ini_set($varName, $oldValue);
        }

        $this->iniSettings = [];
    }

    private function cleanupLocaleSettings(): void
    {
        foreach ($this->locale as $category => $locale) {
            setlocale($category, $locale);
        }

        $this->locale = [];
    }

    /**
     * @throws Exception
     */
    private function shouldExceptionExpectationsBeVerified(Throwable $throwable): bool
    {
        $result = false;

        if ($this->expectedException !== null || $this->expectedExceptionCode !== null || $this->expectedExceptionMessage !== null || $this->expectedExceptionMessageRegExp !== null) {
            $result = true;
        }

        if ($throwable instanceof Exception) {
            $result = false;
        }

        if (is_string($this->expectedException)) {
            try {
                $reflector = new ReflectionClass($this->expectedException);
                // @codeCoverageIgnoreStart
            } catch (ReflectionException $e) {
                throw new Exception(
                    $e->getMessage(),
                    $e->getCode(),
<<<<<<< HEAD
<<<<<<< HEAD
                    $e,
=======
                    $e
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $e
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
            // @codeCoverageIgnoreEnd

            if ($this->expectedException === 'PHPUnit\Framework\Exception' ||
                $this->expectedException === '\PHPUnit\Framework\Exception' ||
                $reflector->isSubclassOf(Exception::class)) {
                $result = true;
            }
        }

        return $result;
    }

    private function shouldRunInSeparateProcess(): bool
    {
        if ($this->inIsolation) {
            return false;
        }

        if ($this->runTestInSeparateProcess) {
            return true;
        }

        if ($this->runClassInSeparateProcess) {
            return true;
        }

        return ConfigurationRegistry::get()->processIsolation();
    }

    private function isCallableTestMethod(string $dependency): bool
    {
        [$className, $methodName] = explode('::', $dependency);

        if (!class_exists($className)) {
            return false;
        }

        $class = new ReflectionClass($className);

        if (!$class->isSubclassOf(__CLASS__)) {
            return false;
        }

        if (!$class->hasMethod($methodName)) {
            return false;
        }

        return TestUtil::isTestMethod(
<<<<<<< HEAD
<<<<<<< HEAD
            $class->getMethod($methodName),
=======
            $class->getMethod($methodName)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $class->getMethod($methodName)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return MockObject&RealInstanceType
     *
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws InvalidArgumentException
     * @throws NoPreviousThrowableException
     */
    private function createMockObject(string $originalClassName, bool $register = true): MockObject
    {
        return $this->getMockBuilder($originalClassName)
                    ->disableOriginalConstructor()
                    ->disableOriginalClone()
                    ->disableArgumentCloning()
                    ->disallowMockingUnknownTypes()
                    ->getMock($register);
    }

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws MoreThanOneDataSetFromDataProviderException
     * @throws NoPreviousThrowableException
     */
    private function performAssertionsOnOutput(): void
    {
        try {
            if ($this->outputExpectedRegex !== null) {
                $this->assertMatchesRegularExpression($this->outputExpectedRegex, $this->output);
            } elseif ($this->outputExpectedString !== null) {
<<<<<<< HEAD
<<<<<<< HEAD
                $this->assertSame($this->outputExpectedString, $this->output);
=======
                $this->assertEquals($this->outputExpectedString, $this->output);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->assertEquals($this->outputExpectedString, $this->output);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        } catch (ExpectationFailedException $e) {
            $this->status = TestStatus::failure($e->getMessage());

            Event\Facade::emitter()->testFailed(
                $this->valueObjectForEvents(),
<<<<<<< HEAD
<<<<<<< HEAD
                Event\Code\ThrowableBuilder::from($e),
                Event\Code\ComparisonFailureBuilder::from($e),
=======
                Event\Code\Throwable::from($e),
                Event\Code\ComparisonFailure::from($e)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                Event\Code\Throwable::from($e),
                Event\Code\ComparisonFailure::from($e)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            throw $e;
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @throws Throwable
     *
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function invokeBeforeClassHookMethods(array $hookMethods, Event\Emitter $emitter): void
    {
        $this->invokeHookMethods(
            $hookMethods['beforeClass'],
            $emitter,
            'testBeforeFirstTestMethodCalled',
<<<<<<< HEAD
<<<<<<< HEAD
            'testBeforeFirstTestMethodFinished',
        );
    }

    /**
     * @throws Throwable
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'testBeforeFirstTestMethodFinished'
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function invokeBeforeTestHookMethods(array $hookMethods, Event\Emitter $emitter): void
    {
        $this->invokeHookMethods(
            $hookMethods['before'],
            $emitter,
            'testBeforeTestMethodCalled',
<<<<<<< HEAD
<<<<<<< HEAD
            'testBeforeTestMethodFinished',
        );
    }

    /**
     * @throws Throwable
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'testBeforeTestMethodFinished'
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function invokePreConditionHookMethods(array $hookMethods, Event\Emitter $emitter): void
    {
        $this->invokeHookMethods(
            $hookMethods['preCondition'],
            $emitter,
            'testPreConditionCalled',
<<<<<<< HEAD
<<<<<<< HEAD
            'testPreConditionFinished',
        );
    }

    /**
     * @throws Throwable
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'testPreConditionFinished'
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function invokePostConditionHookMethods(array $hookMethods, Event\Emitter $emitter): void
    {
        $this->invokeHookMethods(
            $hookMethods['postCondition'],
            $emitter,
            'testPostConditionCalled',
<<<<<<< HEAD
<<<<<<< HEAD
            'testPostConditionFinished',
        );
    }

    /**
     * @throws Throwable
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'testPostConditionFinished'
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function invokeAfterTestHookMethods(array $hookMethods, Event\Emitter $emitter): void
    {
        $this->invokeHookMethods(
            $hookMethods['after'],
            $emitter,
            'testAfterTestMethodCalled',
<<<<<<< HEAD
<<<<<<< HEAD
            'testAfterTestMethodFinished',
        );
    }

    /**
     * @throws Throwable
     *
     * @codeCoverageIgnore
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'testAfterTestMethodFinished'
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function invokeAfterClassHookMethods(array $hookMethods, Event\Emitter $emitter): void
    {
        $this->invokeHookMethods(
            $hookMethods['afterClass'],
            $emitter,
            'testAfterLastTestMethodCalled',
<<<<<<< HEAD
<<<<<<< HEAD
            'testAfterLastTestMethodFinished',
=======
            'testAfterLastTestMethodFinished'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'testAfterLastTestMethodFinished'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @psalm-param list<non-empty-string> $hookMethods
     * @psalm-param 'testBeforeFirstTestMethodCalled'|'testBeforeTestMethodCalled'|'testPreConditionCalled'|'testPostConditionCalled'|'testAfterTestMethodCalled'|'testAfterLastTestMethodCalled' $calledMethod
     * @psalm-param 'testBeforeFirstTestMethodFinished'|'testBeforeTestMethodFinished'|'testPreConditionFinished'|'testPostConditionFinished'|'testAfterTestMethodFinished'|'testAfterLastTestMethodFinished' $finishedMethod
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @throws Throwable
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private function invokeHookMethods(array $hookMethods, Event\Emitter $emitter, string $calledMethod, string $finishedMethod): void
    {
        $methodsInvoked = [];

        foreach ($hookMethods as $methodName) {
            if ($this->methodDoesNotExistOrIsDeclaredInTestCase($methodName)) {
                continue;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            try {
                $this->{$methodName}();
            } catch (Throwable $t) {
            }

            $methodInvoked = new Event\Code\ClassMethod(
                static::class,
                $methodName,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->{$methodName}();

            $methodInvoked = new Event\Code\ClassMethod(
                static::class,
                $methodName
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            $emitter->{$calledMethod}(
                static::class,
                $methodInvoked
            );

            $methodsInvoked[] = $methodInvoked;
<<<<<<< HEAD
<<<<<<< HEAD

            if (isset($t)) {
                break;
            }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if (!empty($methodsInvoked)) {
            $emitter->{$finishedMethod}(
                static::class,
                ...$methodsInvoked
            );
        }
<<<<<<< HEAD
<<<<<<< HEAD

        if (isset($t)) {
            throw $t;
        }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    private function methodDoesNotExistOrIsDeclaredInTestCase(string $methodName): bool
    {
        $reflector = new ReflectionObject($this);

        return !$reflector->hasMethod($methodName) ||
               $reflector->getMethod($methodName)->getDeclaringClass()->getName() === self::class;
    }

    /**
     * @throws ExpectationFailedException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private function verifyExceptionExpectations(\Exception|Throwable $exception): void
=======
    private function verifyExceptionExpectations(Throwable|\Exception $exception): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function verifyExceptionExpectations(Throwable|\Exception $exception): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($this->expectedException !== null) {
            $this->assertThat(
                $exception,
                new ExceptionConstraint(
<<<<<<< HEAD
<<<<<<< HEAD
                    $this->expectedException,
                ),
=======
                    $this->expectedException
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $this->expectedException
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($this->expectedExceptionMessage !== null) {
            $this->assertThat(
                $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
                new ExceptionMessageIsOrContains(
                    $this->expectedExceptionMessage,
                ),
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                new MessageIsOrContains(
                    'exception',
                    $this->expectedExceptionMessage
                )
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($this->expectedExceptionMessageRegExp !== null) {
            $this->assertThat(
                $exception->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
                new ExceptionMessageMatchesRegularExpression(
                    $this->expectedExceptionMessageRegExp,
                ),
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                new MessageMatchesRegularExpression(
                    'exception',
                    $this->expectedExceptionMessageRegExp
                )
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($this->expectedExceptionCode !== null) {
            $this->assertThat(
<<<<<<< HEAD
<<<<<<< HEAD
                $exception->getCode(),
                new ExceptionCode(
                    $this->expectedExceptionCode,
                ),
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $exception,
                new ExceptionCode(
                    $this->expectedExceptionCode
                )
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * @throws AssertionFailedError
     */
    private function expectedExceptionWasNotRaised(): void
    {
        if ($this->expectedException !== null) {
            $this->assertThat(
                null,
<<<<<<< HEAD
<<<<<<< HEAD
                new ExceptionConstraint($this->expectedException),
=======
                new ExceptionConstraint($this->expectedException)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                new ExceptionConstraint($this->expectedException)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } elseif ($this->expectedExceptionMessage !== null) {
            $this->numberOfAssertionsPerformed++;

            throw new AssertionFailedError(
                sprintf(
                    'Failed asserting that exception with message "%s" is thrown',
<<<<<<< HEAD
<<<<<<< HEAD
                    $this->expectedExceptionMessage,
                ),
=======
                    $this->expectedExceptionMessage
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $this->expectedExceptionMessage
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } elseif ($this->expectedExceptionMessageRegExp !== null) {
            $this->numberOfAssertionsPerformed++;

            throw new AssertionFailedError(
                sprintf(
                    'Failed asserting that exception with message matching "%s" is thrown',
<<<<<<< HEAD
<<<<<<< HEAD
                    $this->expectedExceptionMessageRegExp,
                ),
=======
                    $this->expectedExceptionMessageRegExp
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $this->expectedExceptionMessageRegExp
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } elseif ($this->expectedExceptionCode !== null) {
            $this->numberOfAssertionsPerformed++;

            throw new AssertionFailedError(
                sprintf(
                    'Failed asserting that exception with code "%s" is thrown',
<<<<<<< HEAD
<<<<<<< HEAD
                    $this->expectedExceptionCode,
                ),
            );
        }
    }

    private function isRegisteredFailure(Throwable $t): bool
    {
        foreach (array_keys($this->failureTypes) as $failureType) {
            if ($t instanceof $failureType) {
                return true;
            }
        }

        return false;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    private function hasExpectationOnOutput(): bool
    {
        return is_string($this->outputExpectedString) || is_string($this->outputExpectedRegex);
    }

    /**
     * Creates a test stub for the specified interface or class.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return Stub&RealInstanceType
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     * @throws NoPreviousThrowableException
     */
    protected static function createStub(string $originalClassName): Stub
    {
        $stub = (new MockGenerator)->testDouble(
            $originalClassName,
            true,
            callOriginalConstructor: false,
            callOriginalClone: false,
            cloneArguments: false,
            allowMockingUnknownTypes: false,
        );

        Event\Facade::emitter()->testCreatedStub($originalClassName);

        assert($stub instanceof $originalClassName);
        assert($stub instanceof Stub);

        return $stub;
    }

    /**
     * @psalm-param list<class-string> $interfaces
     *
     * @throws MockObjectException
     */
    protected static function createStubForIntersectionOfInterfaces(array $interfaces): Stub
    {
        $stub = (new MockGenerator)->testDoubleForInterfaceIntersection($interfaces, true);

        Event\Facade::emitter()->testCreatedStubForIntersectionOfInterfaces($interfaces);

        return $stub;
    }

    /**
     * Creates (and configures) a test stub for the specified interface or class.
     *
     * @psalm-template RealInstanceType of object
     *
     * @psalm-param class-string<RealInstanceType> $originalClassName
     *
     * @psalm-return Stub&RealInstanceType
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     * @throws NoPreviousThrowableException
     */
    final protected static function createConfiguredStub(string $originalClassName, array $configuration): Stub
    {
        $o = self::createStub($originalClassName);

        foreach ($configuration as $method => $return) {
            $o->method($method)->willReturn($return);
        }

        return $o;
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $this->expectedExceptionCode
                )
            );
        }
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
