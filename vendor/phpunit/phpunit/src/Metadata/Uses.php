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
final class Uses extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $target;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $target
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class Uses extends Metadata
{
    private readonly string $target;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function __construct(int $level, string $target)
    {
        parent::__construct($level);

        $this->target = $target;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-assert-if-true Uses $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isUses(): bool
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function target(): string
    {
        return $this->target;
    }
}
