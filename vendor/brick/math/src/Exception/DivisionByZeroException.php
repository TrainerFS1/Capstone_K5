<?php

declare(strict_types=1);

namespace Brick\Math\Exception;

/**
 * Exception thrown when a division by zero occurs.
 */
class DivisionByZeroException extends MathException
{
    /**
<<<<<<< HEAD
=======
     * @return DivisionByZeroException
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-pure
     */
    public static function divisionByZero() : DivisionByZeroException
    {
        return new self('Division by zero.');
    }

    /**
<<<<<<< HEAD
=======
     * @return DivisionByZeroException
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-pure
     */
    public static function modulusMustNotBeZero() : DivisionByZeroException
    {
        return new self('The modulus must not be zero.');
    }

    /**
<<<<<<< HEAD
=======
     * @return DivisionByZeroException
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-pure
     */
    public static function denominatorMustNotBeZero() : DivisionByZeroException
    {
        return new self('The denominator of a rational number cannot be zero.');
    }
}
