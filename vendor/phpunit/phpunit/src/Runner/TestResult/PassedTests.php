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

use function array_merge;
use function assert;
use function in_array;
use PHPUnit\Event\Code\TestMethod;
<<<<<<< HEAD
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\TestSize\Known;
use PHPUnit\Framework\TestSize\TestSize;
use PHPUnit\Metadata\Api\Groups;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PassedTests
{
    private static ?self $instance = null;

    /**
     * @psalm-var list<class-string>
     */
    private array $passedTestClasses = [];

    /**
     * @psalm-var array<string,array{returnValue: mixed, size: TestSize}>
     */
    private array $passedTestMethods = [];

    public static function instance(): self
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        self::$instance = new self;

        return self::$instance;
    }

    /**
     * @psalm-param class-string $className
     */
    public function testClassPassed(string $className): void
    {
        $this->passedTestClasses[] = $className;
    }

<<<<<<< HEAD
=======
    /**
     * @throws NoDataSetFromDataProviderException
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function testMethodPassed(TestMethod $test, mixed $returnValue): void
    {
        $size = (new Groups)->size(
            $test->className(),
<<<<<<< HEAD
            $test->methodName(),
=======
            $test->methodName()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->passedTestMethods[$test->className() . '::' . $test->methodName()] = [
            'returnValue' => $returnValue,
            'size'        => $size,
        ];
    }

    public function import(self $other): void
    {
        $this->passedTestClasses = array_merge(
            $this->passedTestClasses,
<<<<<<< HEAD
            $other->passedTestClasses,
=======
            $other->passedTestClasses
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $this->passedTestMethods = array_merge(
            $this->passedTestMethods,
<<<<<<< HEAD
            $other->passedTestMethods,
=======
            $other->passedTestMethods
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @psalm-param class-string $className
     */
    public function hasTestClassPassed(string $className): bool
    {
        return in_array($className, $this->passedTestClasses, true);
    }

    public function hasTestMethodPassed(string $method): bool
    {
        return isset($this->passedTestMethods[$method]);
    }

    public function isGreaterThan(string $method, TestSize $other): bool
    {
        if ($other->isUnknown()) {
            return false;
        }

        assert($other instanceof Known);

        $size = $this->passedTestMethods[$method]['size'];

        if ($size->isUnknown()) {
            return false;
        }

        assert($size instanceof Known);

        return $size->isGreaterThan($other);
    }

    public function returnValue(string $method): mixed
    {
        if (isset($this->passedTestMethods[$method])) {
            return $this->passedTestMethods[$method]['returnValue'];
        }

        return null;
    }
}
