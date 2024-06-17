<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

use function array_diff;
<<<<<<< HEAD
<<<<<<< HEAD
use function array_values;
use function basename;
use function get_declared_classes;
use function realpath;
use function str_ends_with;
use function strpos;
use function strtolower;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function array_merge;
use function array_values;
use function basename;
use function class_exists;
use function get_declared_classes;
use function stripos;
use function strlen;
use function strpos;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function substr;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteLoader
{
    /**
     * @psalm-var list<class-string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private static array $declaredClasses = [];

    /**
     * @psalm-var array<non-empty-string, list<class-string>>
     */
    private static array $fileToClassesMap = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private static array $loadedClasses = [];

    /**
     * @psalm-var list<class-string>
     */
    private static array $declaredClasses = [];

    public function __construct()
    {
        if (empty(self::$declaredClasses)) {
            self::$declaredClasses = get_declared_classes();
        }
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @throws Exception
     */
    public function load(string $suiteClassFile): ReflectionClass
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $suiteClassFile = realpath($suiteClassFile);
        $suiteClassName = $this->classNameFromFileName($suiteClassFile);
        $loadedClasses  = $this->loadSuiteClassFile($suiteClassFile);

        foreach ($loadedClasses as $className) {
            /** @noinspection PhpUnhandledExceptionInspection */
            $class = new ReflectionClass($className);

            if ($class->isAnonymous()) {
                continue;
            }

            if ($class->getFileName() !== $suiteClassFile) {
                continue;
            }

            if (!$class->isSubclassOf(TestCase::class)) {
                continue;
            }

            if (!str_ends_with(strtolower($class->getShortName()), strtolower($suiteClassName))) {
                continue;
            }

            if (!$class->isAbstract()) {
                return $class;
            }

            $e = new ClassIsAbstractException($class->getName(), $suiteClassFile);
        }

        if (isset($e)) {
            throw $e;
        }

        foreach ($loadedClasses as $className) {
            if (str_ends_with(strtolower($className), strtolower($suiteClassName))) {
                throw new ClassDoesNotExtendTestCaseException($className, $suiteClassFile);
            }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $suiteClassName = $this->classNameFromFileName($suiteClassFile);

        if (!class_exists($suiteClassName, false)) {
            include_once $suiteClassFile;

            $loadedClasses = array_values(
                array_diff(
                    get_declared_classes(),
                    array_merge(
                        self::$declaredClasses,
                        self::$loadedClasses
                    )
                )
            );

            self::$loadedClasses = array_merge($loadedClasses, self::$loadedClasses);

            if (empty(self::$loadedClasses)) {
                throw new ClassCannotBeFoundException($suiteClassName, $suiteClassFile);
            }
        }

        if (!class_exists($suiteClassName, false)) {
            $offset = 0 - strlen($suiteClassName);

            foreach (self::$loadedClasses as $loadedClass) {
                if (stripos(substr($loadedClass, $offset - 1), '\\' . $suiteClassName) === 0 ||
                    stripos(substr($loadedClass, $offset - 1), '_' . $suiteClassName) === 0) {
                    $suiteClassName = $loadedClass;

                    break;
                }
            }
        }

        if (!class_exists($suiteClassName, false)) {
            throw new ClassCannotBeFoundException($suiteClassName, $suiteClassFile);
        }

        $class = new ReflectionClass($suiteClassName);

        if ($class->isSubclassOf(TestCase::class)) {
            if ($class->isAbstract()) {
                throw new ClassIsAbstractException($suiteClassName, $suiteClassFile);
            }

            return $class;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        throw new ClassCannotBeFoundException($suiteClassName, $suiteClassFile);
    }

    private function classNameFromFileName(string $suiteClassFile): string
    {
        $className = basename($suiteClassFile, '.php');
        $dotPos    = strpos($className, '.');

        if ($dotPos !== false) {
            $className = substr($className, 0, $dotPos);
        }

        return $className;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @psalm-return list<class-string>
     */
    private function loadSuiteClassFile(string $suiteClassFile): array
    {
        if (isset(self::$fileToClassesMap[$suiteClassFile])) {
            return self::$fileToClassesMap[$suiteClassFile];
        }

        if (empty(self::$declaredClasses)) {
            self::$declaredClasses = get_declared_classes();
        }

        require_once $suiteClassFile;

        $loadedClasses = array_values(
            array_diff(
                get_declared_classes(),
                self::$declaredClasses,
            ),
        );

        foreach ($loadedClasses as $loadedClass) {
            /** @noinspection PhpUnhandledExceptionInspection */
            $class = new ReflectionClass($loadedClass);

            if (!isset(self::$fileToClassesMap[$class->getFileName()])) {
                self::$fileToClassesMap[$class->getFileName()] = [];
            }

            self::$fileToClassesMap[$class->getFileName()][] = $class->getName();
        }

        self::$declaredClasses = get_declared_classes();

        if (empty($loadedClasses)) {
            return self::$declaredClasses;
        }

        return $loadedClasses;
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
