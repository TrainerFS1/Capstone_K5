<?php

declare(strict_types=1);

namespace Brick\Math\Internal\Calculator;

use Brick\Math\Internal\Calculator;

/**
 * Calculator implementation built around the bcmath library.
 *
 * @internal
 *
 * @psalm-immutable
 */
class BcMathCalculator extends Calculator
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function add(string $a, string $b) : string
    {
        return \bcadd($a, $b, 0);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function sub(string $a, string $b) : string
    {
        return \bcsub($a, $b, 0);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function mul(string $a, string $b) : string
    {
        return \bcmul($a, $b, 0);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * {@inheritdoc}
     *
     * @psalm-suppress InvalidNullableReturnType
     * @psalm-suppress NullableReturnStatement
     */
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function divQ(string $a, string $b) : string
    {
        return \bcdiv($a, $b, 0);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function divR(string $a, string $b) : string
    {
        return \bcmod($a, $b, 0);
    }

    public function divQR(string $a, string $b) : array
    {
        $q = \bcdiv($a, $b, 0);
        $r = \bcmod($a, $b, 0);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * {@inheritdoc}
     *
     * @psalm-suppress InvalidNullableReturnType
     * @psalm-suppress NullableReturnStatement
     */
    public function divR(string $a, string $b) : string
    {
        if (version_compare(PHP_VERSION, '7.2') >= 0) {
            return \bcmod($a, $b, 0);
        }

        return \bcmod($a, $b);
    }

    /**
     * {@inheritdoc}
     */
    public function divQR(string $a, string $b) : array
    {
        $q = \bcdiv($a, $b, 0);

        if (version_compare(PHP_VERSION, '7.2') >= 0) {
            $r = \bcmod($a, $b, 0);
        } else {
            $r = \bcmod($a, $b);
        }

        assert($q !== null);
        assert($r !== null);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return [$q, $r];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function pow(string $a, int $e) : string
    {
        return \bcpow($a, (string) $e, 0);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function modPow(string $base, string $exp, string $mod) : string
    {
        return \bcpowmod($base, $exp, $mod, 0);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * {@inheritDoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /**
     * {@inheritDoc}
     */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function sqrt(string $n) : string
    {
        return \bcsqrt($n, 0);
    }
}
