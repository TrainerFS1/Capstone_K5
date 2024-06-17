<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestSuite;

<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\Event\Code\TestCollection;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function explode;
use PHPUnit\Event\Code\TestCollection;
use PHPUnit\Event\RuntimeException;
use PHPUnit\Framework\DataProviderTestSuite;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite as FrameworkTestSuite;
use PHPUnit\Runner\PhptTestCase;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TestSuite
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-var non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $name;
    private readonly int $count;
    private readonly TestCollection $tests;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-empty-string $name
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws RuntimeException
     */
    public static function fromTestSuite(FrameworkTestSuite $testSuite): self
    {
        $groups = [];

        foreach ($testSuite->getGroupDetails() as $groupName => $tests) {
            if (!isset($groups[$groupName])) {
                $groups[$groupName] = [];
            }

            foreach ($tests as $test) {
                $groups[$groupName][] = $test::class;
            }
        }

        $tests = [];

        foreach ($testSuite->tests() as $test) {
            if ($test instanceof TestCase || $test instanceof PhptTestCase) {
                $tests[] = $test->valueObjectForEvents();
            }
        }

        if ($testSuite instanceof DataProviderTestSuite) {
            [$className, $methodName] = explode('::', $testSuite->getName());

            try {
                $reflector = new ReflectionMethod($className, $methodName);

                return new TestSuiteForTestMethodWithDataProvider(
                    $testSuite->getName(),
                    $testSuite->count(),
                    TestCollection::fromArray($tests),
                    $className,
                    $methodName,
                    $reflector->getFileName(),
                    $reflector->getStartLine(),
                );
                // @codeCoverageIgnoreStart
            } catch (ReflectionException $e) {
                throw new RuntimeException(
                    $e->getMessage(),
                    $e->getCode(),
                    $e
                );
            }
            // @codeCoverageIgnoreEnd
        }

        if ($testSuite->isForTestClass()) {
            try {
                $reflector = new ReflectionClass($testSuite->getName());

                return new TestSuiteForTestClass(
                    $testSuite->getName(),
                    $testSuite->count(),
                    TestCollection::fromArray($tests),
                    $reflector->getFileName(),
                    $reflector->getStartLine(),
                );
                // @codeCoverageIgnoreStart
            } catch (ReflectionException $e) {
                throw new RuntimeException(
                    $e->getMessage(),
                    $e->getCode(),
                    $e
                );
            }
            // @codeCoverageIgnoreEnd
        }

        return new TestSuiteWithName(
            $testSuite->getName(),
            $testSuite->count(),
            TestCollection::fromArray($tests),
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(string $name, int $size, TestCollection $tests)
    {
        $this->name  = $name;
        $this->count = $size;
        $this->tests = $tests;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function name(): string
    {
        return $this->name;
    }

    public function count(): int
    {
        return $this->count;
    }

    public function tests(): TestCollection
    {
        return $this->tests;
    }

    /**
     * @psalm-assert-if-true TestSuiteWithName $this
     */
    public function isWithName(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true TestSuiteForTestClass $this
     */
    public function isForTestClass(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true TestSuiteForTestMethodWithDataProvider $this
     */
    public function isForTestMethodWithDataProvider(): bool
    {
        return false;
    }
}
