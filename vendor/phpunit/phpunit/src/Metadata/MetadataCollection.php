<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

use function array_filter;
use function array_merge;
<<<<<<< HEAD
use function count;
use Countable;
use IteratorAggregate;

/**
 * @template-implements IteratorAggregate<int, Metadata>
 *
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
=======
use function class_exists;
use function count;
use function method_exists;
use Countable;
use IteratorAggregate;
use PHPUnit\Metadata\Parser\Registry as MetadataRegistry;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements IteratorAggregate<int, Metadata>
 *
 * @psalm-immutable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class MetadataCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<Metadata>
     */
    private readonly array $metadata;

    /**
<<<<<<< HEAD
=======
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     */
    public static function for(string $className, string $methodName): self
    {
        if (class_exists($className)) {
            if (method_exists($className, $methodName)) {
                return MetadataRegistry::parser()->forClassAndMethod($className, $methodName);
            }

            return MetadataRegistry::parser()->forClass($className);
        }

        return self::fromArray([]);
    }

    /**
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-param list<Metadata> $metadata
     */
    public static function fromArray(array $metadata): self
    {
        return new self(...$metadata);
    }

    private function __construct(Metadata ...$metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @psalm-return list<Metadata>
     */
    public function asArray(): array
    {
        return $this->metadata;
    }

    public function count(): int
    {
        return count($this->metadata);
    }

    public function isEmpty(): bool
    {
        return $this->count() === 0;
    }

    public function isNotEmpty(): bool
    {
        return $this->count() > 0;
    }

    public function getIterator(): MetadataCollectionIterator
    {
        return new MetadataCollectionIterator($this);
    }

    public function mergeWith(self $other): self
    {
        return new self(
            ...array_merge(
                $this->asArray(),
<<<<<<< HEAD
                $other->asArray(),
            ),
=======
                $other->asArray()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isClassLevel(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isClassLevel(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isClassLevel()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isMethodLevel(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isMethodLevel(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isMethodLevel()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isAfter(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isAfter(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isAfter()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isAfterClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isAfterClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isAfterClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isBackupGlobals(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isBackupGlobals(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isBackupGlobals()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isBackupStaticProperties(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isBackupStaticProperties(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isBackupStaticProperties()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isBeforeClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isBeforeClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isBeforeClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isBefore(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isBefore(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isBefore()
            )
        );
    }

    public function isCodeCoverageIgnore(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
                static fn (Metadata $metadata): bool => $metadata->isCodeCoverageIgnore()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isCovers(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isCovers(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isCovers()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isCoversClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isCoversClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isCoversClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isCoversDefaultClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isCoversDefaultClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isCoversDefaultClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isCoversFunction(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isCoversFunction(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isCoversFunction()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isExcludeGlobalVariableFromBackup(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isExcludeGlobalVariableFromBackup(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isExcludeGlobalVariableFromBackup()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isExcludeStaticPropertyFromBackup(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isExcludeStaticPropertyFromBackup(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isExcludeStaticPropertyFromBackup()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isCoversNothing(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isCoversNothing(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isCoversNothing()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isDataProvider(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isDataProvider(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isDataProvider()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isDepends(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isDependsOnClass() || $metadata->isDependsOnMethod(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isDependsOnClass() || $metadata->isDependsOnMethod()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isDependsOnClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isDependsOnClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isDependsOnClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isDependsOnMethod(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isDependsOnMethod(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isDependsOnMethod()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isDoesNotPerformAssertions(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isDoesNotPerformAssertions(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isDoesNotPerformAssertions()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isGroup(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isGroup(),
            ),
        );
    }

    public function isIgnoreDeprecations(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
                static fn (Metadata $metadata): bool => $metadata->isIgnoreDeprecations(),
            ),
        );
    }

    /**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5513
     */
    public function isIgnoreClassForCodeCoverage(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
                static fn (Metadata $metadata): bool => $metadata->isIgnoreClassForCodeCoverage(),
            ),
        );
    }

    /**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5513
     */
    public function isIgnoreMethodForCodeCoverage(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
                static fn (Metadata $metadata): bool => $metadata->isIgnoreMethodForCodeCoverage(),
            ),
        );
    }

    /**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5513
     */
    public function isIgnoreFunctionForCodeCoverage(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
                static fn (Metadata $metadata): bool => $metadata->isIgnoreFunctionForCodeCoverage(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isGroup()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRunClassInSeparateProcess(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRunClassInSeparateProcess(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRunClassInSeparateProcess()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRunInSeparateProcess(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRunInSeparateProcess(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRunInSeparateProcess()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRunTestsInSeparateProcesses(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRunTestsInSeparateProcesses(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRunTestsInSeparateProcesses()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isTest(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isTest(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isTest()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isPreCondition(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isPreCondition(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isPreCondition()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isPostCondition(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isPostCondition(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isPostCondition()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isPreserveGlobalState(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isPreserveGlobalState(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isPreserveGlobalState()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresMethod(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresMethod(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresMethod()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresFunction(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresFunction(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresFunction()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresOperatingSystem(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresOperatingSystem(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresOperatingSystem()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresOperatingSystemFamily(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresOperatingSystemFamily(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresOperatingSystemFamily()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresPhp(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresPhp(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresPhp()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresPhpExtension(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresPhpExtension(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresPhpExtension()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresPhpunit(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresPhpunit(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresPhpunit()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isRequiresSetting(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isRequiresSetting(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isRequiresSetting()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isTestDox(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isTestDox(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isTestDox()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isTestWith(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isTestWith(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isTestWith()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isUses(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isUses(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isUses()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isUsesClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isUsesClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isUsesClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isUsesDefaultClass(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isUsesDefaultClass(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isUsesDefaultClass()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isUsesFunction(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
<<<<<<< HEAD
                static fn (Metadata $metadata): bool => $metadata->isUsesFunction(),
            ),
        );
    }

    public function isWithoutErrorHandler(): self
    {
        return new self(
            ...array_filter(
                $this->metadata,
                static fn (Metadata $metadata): bool => $metadata->isWithoutErrorHandler(),
            ),
=======
                static fn (Metadata $metadata): bool => $metadata->isUsesFunction()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
