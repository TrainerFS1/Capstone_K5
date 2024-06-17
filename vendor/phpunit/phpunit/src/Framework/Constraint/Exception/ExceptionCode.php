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

use function sprintf;
<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\Util\Exporter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
=======

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class ExceptionCode extends Constraint
{
    private readonly int|string $expectedCode;

    public function __construct(int|string $expected)
    {
        $this->expectedCode = $expected;
    }

    public function toString(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return 'exception code is ' . $this->expectedCode;
=======
        return 'exception code is ';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return 'exception code is ';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    protected function matches(mixed $other): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return (string) $other === (string) $this->expectedCode;
=======
        return (string) $other->getCode() === (string) $this->expectedCode;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return (string) $other->getCode() === (string) $this->expectedCode;
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
        return sprintf(
            '%s is equal to expected exception code %s',
<<<<<<< HEAD
<<<<<<< HEAD
            Exporter::export($other, true),
            Exporter::export($this->expectedCode, true),
=======
            $this->exporter()->export($other->getCode()),
            $this->exporter()->export($this->expectedCode)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->exporter()->export($other->getCode()),
            $this->exporter()->export($this->expectedCode)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
