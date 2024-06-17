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

use function array_filter;
use function array_map;
use function array_values;
use function explode;
use function in_array;
use function str_contains;
use PHPUnit\Metadata\DependsOnClass;
use PHPUnit\Metadata\DependsOnMethod;
use Stringable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExecutionOrderDependency implements Stringable
{
    private string $className  = '';
    private string $methodName = '';
    private readonly bool $shallowClone;
    private readonly bool $deepClone;

    public static function invalid(): self
    {
        return new self(
            '',
            '',
            false,
<<<<<<< HEAD
            false,
=======
            false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public static function forClass(DependsOnClass $metadata): self
    {
        return new self(
            $metadata->className(),
            'class',
            $metadata->deepClone(),
<<<<<<< HEAD
            $metadata->shallowClone(),
=======
            $metadata->shallowClone()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public static function forMethod(DependsOnMethod $metadata): self
    {
        return new self(
            $metadata->className(),
            $metadata->methodName(),
            $metadata->deepClone(),
<<<<<<< HEAD
            $metadata->shallowClone(),
=======
            $metadata->shallowClone()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @psalm-param list<ExecutionOrderDependency> $dependencies
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function filterInvalid(array $dependencies): array
    {
        return array_values(
            array_filter(
                $dependencies,
<<<<<<< HEAD
                static fn (self $d) => $d->isValid(),
            ),
=======
                static fn (self $d) => $d->isValid()
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @psalm-param list<ExecutionOrderDependency> $existing
     * @psalm-param list<ExecutionOrderDependency> $additional
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function mergeUnique(array $existing, array $additional): array
    {
        $existingTargets = array_map(
            static fn ($dependency) => $dependency->getTarget(),
<<<<<<< HEAD
            $existing,
        );

        foreach ($additional as $dependency) {
            $additionalTarget = $dependency->getTarget();

            if (in_array($additionalTarget, $existingTargets, true)) {
                continue;
            }

            $existingTargets[] = $additionalTarget;
=======
            $existing
        );

        foreach ($additional as $dependency) {
            if (in_array($dependency->getTarget(), $existingTargets, true)) {
                continue;
            }

            $existingTargets[] = $dependency->getTarget();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $existing[]        = $dependency;
        }

        return $existing;
    }

    /**
     * @psalm-param list<ExecutionOrderDependency> $left
     * @psalm-param list<ExecutionOrderDependency> $right
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function diff(array $left, array $right): array
    {
        if ($right === []) {
            return $left;
        }

        if ($left === []) {
            return [];
        }

        $diff         = [];
        $rightTargets = array_map(
            static fn ($dependency) => $dependency->getTarget(),
<<<<<<< HEAD
            $right,
=======
            $right
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        foreach ($left as $dependency) {
            if (in_array($dependency->getTarget(), $rightTargets, true)) {
                continue;
            }

            $diff[] = $dependency;
        }

        return $diff;
    }

    public function __construct(string $classOrCallableName, ?string $methodName = null, bool $deepClone = false, bool $shallowClone = false)
    {
<<<<<<< HEAD
        $this->deepClone    = $deepClone;
        $this->shallowClone = $shallowClone;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($classOrCallableName === '') {
            return;
        }

        if (str_contains($classOrCallableName, '::')) {
            [$this->className, $this->methodName] = explode('::', $classOrCallableName);
        } else {
            $this->className  = $classOrCallableName;
            $this->methodName = !empty($methodName) ? $methodName : 'class';
        }
<<<<<<< HEAD
=======

        $this->deepClone    = $deepClone;
        $this->shallowClone = $shallowClone;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function __toString(): string
    {
        return $this->getTarget();
    }

    public function isValid(): bool
    {
        // Invalid dependencies can be declared and are skipped by the runner
        return $this->className !== '' && $this->methodName !== '';
    }

    public function shallowClone(): bool
    {
        return $this->shallowClone;
    }

    public function deepClone(): bool
    {
        return $this->deepClone;
    }

    public function targetIsClass(): bool
    {
        return $this->methodName === 'class';
    }

    public function getTarget(): string
    {
        return $this->isValid()
            ? $this->className . '::' . $this->methodName
            : '';
    }

    public function getTargetClassName(): string
    {
        return $this->className;
    }
}
