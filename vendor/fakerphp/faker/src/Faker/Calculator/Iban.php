<?php

namespace Faker\Calculator;

class Iban
{
    /**
     * Generates IBAN Checksum
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return string Checksum (numeric string)
     */
    public static function checksum(string $iban)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $iban
     *
     * @return string Checksum (numeric string)
     */
    public static function checksum($iban)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        // Move first four digits to end and set checksum to '00'
        $checkString = substr($iban, 4) . substr($iban, 0, 2) . '00';

        // Replace all letters with their number equivalents
        $checkString = preg_replace_callback(
            '/[A-Z]/',
            static function (array $matches): string {
                return (string) self::alphaToNumber($matches[0]);
            },
            $checkString,
        );

        // Perform mod 97 and subtract from 98
        $checksum = 98 - self::mod97($checkString);

        return str_pad($checksum, 2, '0', STR_PAD_LEFT);
    }

    /**
     * Converts letter to number
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return int
     */
    public static function alphaToNumber(string $char)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $char
     *
     * @return int
     */
    public static function alphaToNumber($char)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return ord($char) - 55;
    }

    /**
     * Calculates mod97 on a numeric string
     *
     * @param string $number Numeric string
     *
     * @return int
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function mod97(string $number)
=======
    public static function mod97($number)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function mod97($number)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $checksum = (int) $number[0];

        for ($i = 1, $size = strlen($number); $i < $size; ++$i) {
            $checksum = (10 * $checksum + (int) $number[$i]) % 97;
        }

        return $checksum;
    }

    /**
     * Checks whether an IBAN has a valid checksum
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return bool
     */
    public static function isValid(string $iban)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $iban
     *
     * @return bool
     */
    public static function isValid($iban)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return self::checksum($iban) === substr($iban, 2, 2);
    }
}
