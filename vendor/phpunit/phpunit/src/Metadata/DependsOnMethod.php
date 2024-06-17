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
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class DependsOnMethod extends Metadata
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @psalm-var non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $methodName;
    private readonly bool $deepClone;
    private readonly bool $shallowClone;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param 0|1 $level
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @psalm-param class-string $className
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @psalm-param class-string $className
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function __construct(int $level, string $className, string $methodName, bool $deepClone, bool $shallowClone)
    {
        parent::__construct($level);

        $this->className    = $className;
        $this->methodName   = $methodName;
        $this->deepClone    = $deepClone;
        $this->shallowClone = $shallowClone;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-assert-if-true DependsOnMethod $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isDependsOnMethod(): bool
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

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function methodName(): string
    {
        return $this->methodName;
    }

    public function deepClone(): bool
    {
        return $this->deepClone;
    }

    public function shallowClone(): bool
    {
        return $this->shallowClone;
    }
}
