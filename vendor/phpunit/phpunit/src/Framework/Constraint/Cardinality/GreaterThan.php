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
<<<<<<< HEAD
use PHPUnit\Util\Exporter;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class GreaterThan extends Constraint
{
    private readonly mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    /**
     * Returns a string representation of the constraint.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toString(bool $exportObjects = false): string
    {
        return 'is greater than ' . Exporter::export($this->value, $exportObjects);
=======
    public function toString(): string
    {
        return 'is greater than ' . $this->exporter()->export($this->value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toString(): string
    {
        return 'is greater than ' . $this->exporter()->export($this->value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    protected function matches(mixed $other): bool
    {
        return $this->value < $other;
    }
}
