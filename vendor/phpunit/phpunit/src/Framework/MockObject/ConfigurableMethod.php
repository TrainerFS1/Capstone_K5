<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

use SebastianBergmann\Type\Type;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurableMethod
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $name;

    /**
     * @psalm-var array<int, mixed>
     */
    private readonly array $defaultParameterValues;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $numberOfParameters;
    private readonly Type $returnType;

    /**
     * @psalm-param non-empty-string $name
     * @psalm-param array<int, mixed> $defaultParameterValues
     * @psalm-param non-negative-int $numberOfParameters
     */
    public function __construct(string $name, array $defaultParameterValues, int $numberOfParameters, Type $returnType)
    {
        $this->name                   = $name;
        $this->defaultParameterValues = $defaultParameterValues;
        $this->numberOfParameters     = $numberOfParameters;
        $this->returnType             = $returnType;
    }

    /**
     * @psalm-return non-empty-string
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $name;
    private readonly Type $returnType;

    public function __construct(string $name, Type $returnType)
    {
        $this->name       = $name;
        $this->returnType = $returnType;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function name(): string
    {
        return $this->name;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return array<int, mixed>
     */
    public function defaultParameterValues(): array
    {
        return $this->defaultParameterValues;
    }

    /**
     * @psalm-return non-negative-int
     */
    public function numberOfParameters(): int
    {
        return $this->numberOfParameters;
    }

    public function mayReturn(mixed $value): bool
    {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function mayReturn(mixed $value): bool
    {
        if ($value === null && $this->returnType->allowsNull()) {
            return true;
        }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->returnType->isAssignable(Type::fromValue($value, false));
    }

    public function returnTypeDeclaration(): string
    {
        return $this->returnType->asString();
    }
}
