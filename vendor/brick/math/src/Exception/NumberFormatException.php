<?php

declare(strict_types=1);

namespace Brick\Math\Exception;

/**
 * Exception thrown when attempting to create a number from a string with an invalid format.
 */
class NumberFormatException extends MathException
{
<<<<<<< HEAD
    public static function invalidFormat(string $value) : self
    {
        return new self(\sprintf(
            'The given value "%s" does not represent a valid number.',
            $value,
        ));
    }

    /**
     * @param string $char The failing character.
     *
=======
    /**
     * @param string $char The failing character.
     *
     * @return NumberFormatException
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-pure
     */
    public static function charNotInAlphabet(string $char) : self
    {
        $ord = \ord($char);

        if ($ord < 32 || $ord > 126) {
            $char = \strtoupper(\dechex($ord));

            if ($ord < 10) {
                $char = '0' . $char;
            }
        } else {
            $char = '"' . $char . '"';
        }

<<<<<<< HEAD
        return new self(\sprintf('Char %s is not a valid character in the given alphabet.', $char));
=======
        return new self(sprintf('Char %s is not a valid character in the given alphabet.', $char));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
