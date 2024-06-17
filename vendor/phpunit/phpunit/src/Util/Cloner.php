<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Cloner
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-template OriginalType of object
=======
     * @psalm-template OriginalType
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @psalm-template OriginalType
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @psalm-param OriginalType $original
     *
     * @psalm-return OriginalType
     */
    public static function clone(object $original): object
    {
        try {
            return clone $original;
        } catch (Throwable) {
            return $original;
        }
    }
}
