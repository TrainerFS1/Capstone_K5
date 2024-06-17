<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Api;

<<<<<<< HEAD
use function array_unique;
use function array_values;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function assert;
use function count;
use function interface_exists;
use function sprintf;
use function str_starts_with;
use PHPUnit\Framework\CodeCoverageException;
use PHPUnit\Framework\InvalidCoversTargetException;
<<<<<<< HEAD
use PHPUnit\Framework\TestSuite;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Metadata\Covers;
use PHPUnit\Metadata\CoversClass;
use PHPUnit\Metadata\CoversDefaultClass;
use PHPUnit\Metadata\CoversFunction;
<<<<<<< HEAD
use PHPUnit\Metadata\IgnoreClassForCodeCoverage;
use PHPUnit\Metadata\IgnoreFunctionForCodeCoverage;
use PHPUnit\Metadata\IgnoreMethodForCodeCoverage;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Metadata\Parser\Registry;
use PHPUnit\Metadata\Uses;
use PHPUnit\Metadata\UsesClass;
use PHPUnit\Metadata\UsesDefaultClass;
use PHPUnit\Metadata\UsesFunction;
<<<<<<< HEAD
use RecursiveIteratorIterator;
use SebastianBergmann\CodeUnit\CodeUnitCollection;
use SebastianBergmann\CodeUnit\Exception as CodeUnitException;
=======
use SebastianBergmann\CodeUnit\CodeUnitCollection;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use SebastianBergmann\CodeUnit\InvalidCodeUnitException;
use SebastianBergmann\CodeUnit\Mapper;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CodeCoverage
{
    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
     * @psalm-param non-empty-string $methodName
     *
     * @psalm-return array<string,list<int>>|false
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @throws CodeCoverageException
     */
    public function linesToBeCovered(string $className, string $methodName): array|false
    {
        if (!$this->shouldCodeCoverageBeCollectedFor($className, $methodName)) {
            return false;
        }

        $metadataForClass = Registry::parser()->forClass($className);
        $classShortcut    = null;

        if ($metadataForClass->isCoversDefaultClass()->isNotEmpty()) {
            if (count($metadataForClass->isCoversDefaultClass()) > 1) {
                throw new CodeCoverageException(
                    sprintf(
                        'More than one @coversDefaultClass annotation for class or interface "%s"',
<<<<<<< HEAD
                        $className,
                    ),
=======
                        $className
                    )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $metadata = $metadataForClass->isCoversDefaultClass()->asArray()[0];

            assert($metadata instanceof CoversDefaultClass);

            $classShortcut = $metadata->className();
        }

        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach (Registry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
<<<<<<< HEAD
            if (!$metadata->isCoversClass() && !$metadata->isCoversFunction() && !$metadata->isCovers()) {
                continue;
            }

            assert($metadata instanceof CoversClass || $metadata instanceof CoversFunction || $metadata instanceof Covers);

            if ($metadata->isCoversClass() || $metadata->isCoversFunction()) {
                $codeUnits = $codeUnits->mergeWith($this->mapToCodeUnits($metadata));
=======
            if ($metadata->isCoversClass() || $metadata->isCoversFunction()) {
                assert($metadata instanceof CoversClass || $metadata instanceof CoversFunction);

                try {
                    $codeUnits = $codeUnits->mergeWith(
                        $mapper->stringToCodeUnits($metadata->asStringForCodeUnitMapper())
                    );
                } catch (InvalidCodeUnitException $e) {
                    if ($metadata->isCoversClass()) {
                        $type = 'Class';
                    } else {
                        $type = 'Function';
                    }

                    throw new InvalidCoversTargetException(
                        sprintf(
                            '%s "%s" is not a valid target for code coverage',
                            $type,
                            $metadata->asStringForCodeUnitMapper()
                        ),
                        $e->getCode(),
                        $e
                    );
                }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            } elseif ($metadata->isCovers()) {
                assert($metadata instanceof Covers);

                $target = $metadata->target();

                if (interface_exists($target)) {
                    throw new InvalidCoversTargetException(
                        sprintf(
                            'Trying to @cover interface "%s".',
<<<<<<< HEAD
                            $target,
                        ),
=======
                            $target
                        )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }

                if ($classShortcut !== null && str_starts_with($target, '::')) {
                    $target = $classShortcut . $target;
                }

                try {
                    $codeUnits = $codeUnits->mergeWith($mapper->stringToCodeUnits($target));
                } catch (InvalidCodeUnitException $e) {
                    throw new InvalidCoversTargetException(
                        sprintf(
                            '"@covers %s" is invalid',
<<<<<<< HEAD
                            $target,
                        ),
                        $e->getCode(),
                        $e,
=======
                            $target
                        ),
                        $e->getCode(),
                        $e
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }
        }

        return $mapper->codeUnitsToSourceLines($codeUnits);
    }

    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
     * @psalm-param non-empty-string $methodName
     *
     * @psalm-return array<string,list<int>>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @throws CodeCoverageException
     */
    public function linesToBeUsed(string $className, string $methodName): array
    {
        $metadataForClass = Registry::parser()->forClass($className);
        $classShortcut    = null;

        if ($metadataForClass->isUsesDefaultClass()->isNotEmpty()) {
            if (count($metadataForClass->isUsesDefaultClass()) > 1) {
                throw new CodeCoverageException(
                    sprintf(
                        'More than one @usesDefaultClass annotation for class or interface "%s"',
<<<<<<< HEAD
                        $className,
                    ),
=======
                        $className
                    )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $metadata = $metadataForClass->isUsesDefaultClass()->asArray()[0];

            assert($metadata instanceof UsesDefaultClass);

            $classShortcut = $metadata->className();
        }

        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach (Registry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
<<<<<<< HEAD
            if (!$metadata->isUsesClass() && !$metadata->isUsesFunction() && !$metadata->isUses()) {
                continue;
            }

            assert($metadata instanceof UsesClass || $metadata instanceof UsesFunction || $metadata instanceof Uses);

            if ($metadata->isUsesClass() || $metadata->isUsesFunction()) {
                $codeUnits = $codeUnits->mergeWith($this->mapToCodeUnits($metadata));
=======
            if ($metadata->isUsesClass() || $metadata->isUsesFunction()) {
                assert($metadata instanceof UsesClass || $metadata instanceof UsesFunction);

                try {
                    $codeUnits = $codeUnits->mergeWith(
                        $mapper->stringToCodeUnits($metadata->asStringForCodeUnitMapper())
                    );
                } catch (InvalidCodeUnitException $e) {
                    if ($metadata->isUsesClass()) {
                        $type = 'Class';
                    } else {
                        $type = 'Function';
                    }

                    throw new InvalidCoversTargetException(
                        sprintf(
                            '%s "%s" is not a valid target for code coverage',
                            $type,
                            $metadata->asStringForCodeUnitMapper()
                        ),
                        $e->getCode(),
                        $e
                    );
                }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            } elseif ($metadata->isUses()) {
                assert($metadata instanceof Uses);

                $target = $metadata->target();

                if ($classShortcut !== null && str_starts_with($target, '::')) {
                    $target = $classShortcut . $target;
                }

                try {
                    $codeUnits = $codeUnits->mergeWith($mapper->stringToCodeUnits($target));
                } catch (InvalidCodeUnitException $e) {
                    throw new InvalidCoversTargetException(
                        sprintf(
                            '"@uses %s" is invalid',
<<<<<<< HEAD
                            $target,
                        ),
                        $e->getCode(),
                        $e,
=======
                            $target
                        ),
                        $e->getCode(),
                        $e
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }
        }

        return $mapper->codeUnitsToSourceLines($codeUnits);
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<int>>
     */
    public function linesToBeIgnored(TestSuite $testSuite): array
    {
        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach ($this->testCaseClassesIn($testSuite) as $testCaseClassName) {
            $codeUnits = $codeUnits->mergeWith(
                $this->codeUnitsIgnoredBy($testCaseClassName),
            );
        }

        return $mapper->codeUnitsToSourceLines($codeUnits);
    }

    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @psalm-param class-string $className
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function shouldCodeCoverageBeCollectedFor(string $className, string $methodName): bool
    {
        $metadataForClass  = Registry::parser()->forClass($className);
        $metadataForMethod = Registry::parser()->forMethod($className, $methodName);

        if ($metadataForMethod->isCoversNothing()->isNotEmpty()) {
            return false;
        }

        if ($metadataForMethod->isCovers()->isNotEmpty() ||
            $metadataForMethod->isCoversClass()->isNotEmpty() ||
            $metadataForMethod->isCoversFunction()->isNotEmpty()) {
            return true;
        }

        if ($metadataForClass->isCoversNothing()->isNotEmpty()) {
            return false;
        }

        return true;
    }
<<<<<<< HEAD

    /**
     * @psalm-return list<class-string>
     */
    private function testCaseClassesIn(TestSuite $testSuite): array
    {
        $classNames = [];

        foreach (new RecursiveIteratorIterator($testSuite) as $test) {
            $classNames[] = $test::class;
        }

        return array_values(array_unique($classNames));
    }

    /**
     * @psalm-param class-string $className
     */
    private function codeUnitsIgnoredBy(string $className): CodeUnitCollection
    {
        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach (Registry::parser()->forClass($className) as $metadata) {
            if ($metadata instanceof IgnoreClassForCodeCoverage) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits($metadata->className()),
                );
            }

            if ($metadata instanceof IgnoreMethodForCodeCoverage) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits($metadata->className() . '::' . $metadata->methodName()),
                );
            }

            if ($metadata instanceof IgnoreFunctionForCodeCoverage) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits('::' . $metadata->functionName()),
                );
            }
        }

        return $codeUnits;
    }

    /**
     * @throws InvalidCoversTargetException
     */
    private function mapToCodeUnits(CoversClass|CoversFunction|UsesClass|UsesFunction $metadata): CodeUnitCollection
    {
        $mapper = new Mapper;

        try {
            return $mapper->stringToCodeUnits($metadata->asStringForCodeUnitMapper());
        } catch (CodeUnitException $e) {
            if ($metadata->isCoversClass() || $metadata->isUsesClass()) {
                if (interface_exists($metadata->className())) {
                    $type = 'Interface';
                } else {
                    $type = 'Class';
                }
            } else {
                $type = 'Function';
            }

            throw new InvalidCoversTargetException(
                sprintf(
                    '%s "%s" is not a valid target for code coverage',
                    $type,
                    $metadata->asStringForCodeUnitMapper(),
                ),
                $e->getCode(),
                $e,
            );
        }
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
