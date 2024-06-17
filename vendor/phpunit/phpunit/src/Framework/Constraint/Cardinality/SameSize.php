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
use Countable;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\Exception;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class SameSize extends Count
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param Countable|iterable $expected
=======
     * @psalm-param \Countable|iterable $expected
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @psalm-param \Countable|iterable $expected
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @throws Exception
     */
    public function __construct($expected)
    {
        parent::__construct((int) $this->getCountOf($expected));
    }
}
