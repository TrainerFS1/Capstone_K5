<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\TestStatus;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
abstract class Known extends TestStatus
{
    /**
     * @psalm-assert-if-true Known $this
     */
    public function isKnown(): bool
    {
        return true;
    }
}
