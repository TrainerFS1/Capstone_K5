<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

<<<<<<< HEAD
<<<<<<< HEAD
use function array_keys;
use function array_merge;
use function array_reverse;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Reflection
{
    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-return array{file: non-empty-string, line: non-negative-int}
=======
     * @psalm-return array{file: string, line: int}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @psalm-return array{file: string, line: int}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function sourceLocationFor(string $className, string $methodName): array
    {
        try {
            $reflector = new ReflectionMethod($className, $methodName);

            $file = $reflector->getFileName();
            $line = $reflector->getStartLine();
        } catch (ReflectionException) {
            $file = 'unknown';
            $line = 0;
        }

        return [
            'file' => $file,
            'line' => $line,
        ];
    }

    /**
     * @psalm-return list<ReflectionMethod>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function publicMethodsInTestClass(ReflectionClass $class): array
    {
        return self::filterAndSortMethods($class, ReflectionMethod::IS_PUBLIC, true);
=======
    public function publicMethodsInTestClass(ReflectionClass $class): array
    {
        return $this->filterMethods($class, ReflectionMethod::IS_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function publicMethodsInTestClass(ReflectionClass $class): array
    {
        return $this->filterMethods($class, ReflectionMethod::IS_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @psalm-return list<ReflectionMethod>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function methodsInTestClass(ReflectionClass $class): array
    {
        return self::filterAndSortMethods($class, null, false);
=======
    public function methodsInTestClass(ReflectionClass $class): array
    {
        return $this->filterMethods($class, null);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function methodsInTestClass(ReflectionClass $class): array
    {
        return $this->filterMethods($class, null);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @psalm-return list<ReflectionMethod>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private static function filterAndSortMethods(ReflectionClass $class, ?int $filter, bool $sortHighestToLowest): array
    {
        $methodsByClass = [];

        foreach ($class->getMethods($filter) as $method) {
            $declaringClassName = $method->getDeclaringClass()->getName();

            if ($declaringClassName === TestCase::class) {
                continue;
            }

            if ($declaringClassName === Assert::class) {
                continue;
            }

            if (!isset($methodsByClass[$declaringClassName])) {
                $methodsByClass[$declaringClassName] = [];
            }

            $methodsByClass[$declaringClassName][] = $method;
        }

        $classNames = array_keys($methodsByClass);

        if ($sortHighestToLowest) {
            $classNames = array_reverse($classNames);
        }

        $methods = [];

        foreach ($classNames as $className) {
            $methods = array_merge($methods, $methodsByClass[$className]);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function filterMethods(ReflectionClass $class, ?int $filter): array
    {
        $methods = [];

        foreach ($class->getMethods($filter) as $method) {
            if ($method->getDeclaringClass()->getName() === TestCase::class) {
                continue;
            }

            if ($method->getDeclaringClass()->getName() === Assert::class) {
                continue;
            }

            $methods[] = $method;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $methods;
    }
}
