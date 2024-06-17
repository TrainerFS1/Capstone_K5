<?php

declare(strict_types=1);

namespace Faker\Core;

use Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Number implements Extension\NumberExtension
{
    public function numberBetween(int $min = 0, int $max = 2147483647): int
    {
        $int1 = min($min, $max);
        $int2 = max($min, $max);

        return mt_rand($int1, $int2);
    }

    public function randomDigit(): int
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->numberBetween(0, 9);
=======
        return mt_rand(0, 9);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return mt_rand(0, 9);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function randomDigitNot(int $except): int
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $result = $this->numberBetween(0, 8);
=======
        $result = self::numberBetween(0, 8);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $result = self::numberBetween(0, 8);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if ($result >= $except) {
            ++$result;
        }

        return $result;
    }

    public function randomDigitNotZero(): int
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->numberBetween(1, 9);
=======
        return mt_rand(1, 9);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return mt_rand(1, 9);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function randomFloat(?int $nbMaxDecimals = null, float $min = 0, ?float $max = null): float
    {
        if (null === $nbMaxDecimals) {
            $nbMaxDecimals = $this->randomDigit();
        }

        if (null === $max) {
            $max = $this->randomNumber();

            if ($min > $max) {
                $max = $min;
            }
        }

        if ($min > $max) {
            $tmp = $min;
            $min = $max;
            $max = $tmp;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return round($min + $this->numberBetween() / mt_getrandmax() * ($max - $min), $nbMaxDecimals);
=======
        return round($min + mt_rand() / mt_getrandmax() * ($max - $min), $nbMaxDecimals);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return round($min + mt_rand() / mt_getrandmax() * ($max - $min), $nbMaxDecimals);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function randomNumber(int $nbDigits = null, bool $strict = false): int
    {
        if (null === $nbDigits) {
            $nbDigits = $this->randomDigitNotZero();
        }
        $max = 10 ** $nbDigits - 1;

        if ($max > mt_getrandmax()) {
            throw new \InvalidArgumentException('randomNumber() can only generate numbers up to mt_getrandmax()');
        }

        if ($strict) {
<<<<<<< HEAD
<<<<<<< HEAD
            return $this->numberBetween(10 ** ($nbDigits - 1), $max);
        }

        return $this->numberBetween(0, $max);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return mt_rand(10 ** ($nbDigits - 1), $max);
        }

        return mt_rand(0, $max);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
