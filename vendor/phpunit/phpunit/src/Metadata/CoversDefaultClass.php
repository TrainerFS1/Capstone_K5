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
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class CoversDefaultClass extends Metadata
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;

    /**
<<<<<<< HEAD
     * @psalm-param 0|1 $level
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @psalm-param class-string $className
     */
    protected function __construct(int $level, string $className)
    {
        parent::__construct($level);

        $this->className = $className;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true CoversDefaultClass $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isCoversDefaultClass(): bool
    {
        return true;
    }

    /**
     * @psalm-return class-string
     */
    public function className(): string
    {
        return $this->className;
    }
}
