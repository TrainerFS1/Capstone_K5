<?php

namespace Faker\Calculator;

/**
 * Utility class for generating and validating Luhn numbers.
 *
 * Luhn algorithm is used to validate credit card numbers, IMEI numbers, and
 * National Provider Identifier numbers.
 *
 * @see http://en.wikipedia.org/wiki/Luhn_algorithm
 */
class Luhn
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return int
     */
    private static function checksum(string $number)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $number
     *
     * @return int
     */
    private static function checksum($number)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $number = (string) $number;
        $length = strlen($number);
        $sum = 0;

        for ($i = $length - 1; $i >= 0; $i -= 2) {
            $sum += $number[$i];
        }

        for ($i = $length - 2; $i >= 0; $i -= 2) {
            $sum += array_sum(str_split($number[$i] * 2));
        }

        return $sum % 10;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return string
     */
    public static function computeCheckDigit(string $partialNumber)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $partialNumber
     *
     * @return string
     */
    public static function computeCheckDigit($partialNumber)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $checkDigit = self::checksum($partialNumber . '0');

        if ($checkDigit === 0) {
<<<<<<< HEAD
<<<<<<< HEAD
            return '0';
=======
            return 0;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            return 0;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return (string) (10 - $checkDigit);
    }

    /**
     * Checks whether a number (partial number + check digit) is Luhn compliant
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return bool
     */
    public static function isValid(string $number)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $number
     *
     * @return bool
     */
    public static function isValid($number)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return self::checksum($number) === 0;
    }

    /**
     * Generate a Luhn compliant number.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return string
     */
    public static function generateLuhnNumber(string $partialValue)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $partialValue
     *
     * @return string
     */
    public static function generateLuhnNumber($partialValue)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!preg_match('/^\d+$/', $partialValue)) {
            throw new \InvalidArgumentException('Argument should be an integer.');
        }

        return $partialValue . Luhn::computeCheckDigit($partialValue);
    }
}
