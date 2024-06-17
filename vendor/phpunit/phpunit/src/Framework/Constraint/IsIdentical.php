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
use function explode;
use function gettype;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function is_array;
use function is_object;
use function is_string;
use function sprintf;
use PHPUnit\Framework\ExpectationFailedException;
<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\Util\Exporter;
use SebastianBergmann\Comparator\ComparisonFailure;
use UnitEnum;
=======
use SebastianBergmann\Comparator\ComparisonFailure;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use SebastianBergmann\Comparator\ComparisonFailure;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsIdentical extends Constraint
{
    private readonly mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false): ?bool
    {
        $success = $this->value === $other;

        if ($returnResult) {
            return $success;
        }

        if (!$success) {
            $f = null;

            // if both values are strings, make sure a diff is generated
            if (is_string($this->value) && is_string($other)) {
                $f = new ComparisonFailure(
                    $this->value,
                    $other,
                    sprintf("'%s'", $this->value),
<<<<<<< HEAD
<<<<<<< HEAD
                    sprintf("'%s'", $other),
                );
            }

            // if both values are array or enums, make sure a diff is generated
            if ((is_array($this->value) && is_array($other)) || ($this->value instanceof UnitEnum && $other instanceof UnitEnum)) {
                $f = new ComparisonFailure(
                    $this->value,
                    $other,
                    Exporter::export($this->value, true),
                    Exporter::export($other, true),
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    sprintf("'%s'", $other)
                );
            }

            // if both values are array, make sure a diff is generated
            if (is_array($this->value) && is_array($other)) {
                $f = new ComparisonFailure(
                    $this->value,
                    $other,
                    $this->exporter()->export($this->value),
                    $this->exporter()->export($other)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $this->fail($other, $description, $f);
        }

        return null;
    }

    /**
     * Returns a string representation of the constraint.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toString(bool $exportObjects = false): string
=======
    public function toString(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toString(): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (is_object($this->value)) {
            return 'is identical to an object of class "' .
                $this->value::class . '"';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return 'is identical to ' . Exporter::export($this->value, $exportObjects);
=======
        return 'is identical to ' . $this->exporter()->export($this->value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return 'is identical to ' . $this->exporter()->export($this->value);
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
        if (is_object($this->value) && is_object($other)) {
            return 'two variables reference the same object';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (explode(' ', gettype($this->value), 2)[0] === 'resource' && explode(' ', gettype($other), 2)[0] === 'resource') {
            return 'two variables reference the same resource';
        }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (is_string($this->value) && is_string($other)) {
            return 'two strings are identical';
        }

        if (is_array($this->value) && is_array($other)) {
            return 'two arrays are identical';
        }

        return parent::failureDescription($other);
    }
}
