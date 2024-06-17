<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class BeforeClass extends Metadata
{
    /**
     * @psalm-assert-if-true BeforeClass $this
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class BeforeClass extends Metadata
{
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isBeforeClass(): bool
    {
        return true;
    }
}
