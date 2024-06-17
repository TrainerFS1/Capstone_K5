<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Constraint;

<<<<<<< HEAD
use function class_exists;
use function interface_exists;
use function sprintf;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
=======
use function sprintf;
use ReflectionClass;
use ReflectionException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsInstanceOf extends Constraint
{
<<<<<<< HEAD
    /**
     * @psalm-var class-string
     */
    private readonly string $name;

    /**
     * @psalm-var 'class'|'interface'
     */
    private readonly string $type;

    /**
     * @throws UnknownClassOrInterfaceException
     */
    public function __construct(string $name)
    {
        if (class_exists($name)) {
            $this->type = 'class';
        } elseif (interface_exists($name)) {
            $this->type = 'interface';
        } else {
            throw new UnknownClassOrInterfaceException($name);
        }

        $this->name = $name;
=======
    private readonly string $className;

    public function __construct(string $className)
    {
        $this->className = $className;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        return sprintf(
<<<<<<< HEAD
            'is an instance of %s %s',
            $this->type,
            $this->name,
=======
            'is instance of %s "%s"',
            $this->getType(),
            $this->className
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    protected function matches(mixed $other): bool
    {
<<<<<<< HEAD
        return $other instanceof $this->name;
=======
        return $other instanceof $this->className;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     */
    protected function failureDescription(mixed $other): string
    {
<<<<<<< HEAD
        return $this->valueToTypeStringFragment($other) . $this->toString(true);
=======
        return sprintf(
            '%s is an instance of %s "%s"',
            $this->exporter()->shortenedExport($other),
            $this->getType(),
            $this->className
        );
    }

    private function getType(): string
    {
        try {
            $reflection = new ReflectionClass($this->className);

            if ($reflection->isInterface()) {
                return 'interface';
            }
        } catch (ReflectionException) {
        }

        return 'class';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
