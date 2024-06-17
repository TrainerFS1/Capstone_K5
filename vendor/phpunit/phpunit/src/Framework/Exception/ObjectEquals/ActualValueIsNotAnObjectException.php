<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use const PHP_EOL;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use const PHP_EOL;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ActualValueIsNotAnObjectException extends Exception
{
    public function __construct()
    {
        parent::__construct(
<<<<<<< HEAD
<<<<<<< HEAD
            'Actual value is not an object',
        );
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Actual value is not an object'
        );
    }

    public function __toString(): string
    {
        return $this->getMessage() . PHP_EOL;
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
