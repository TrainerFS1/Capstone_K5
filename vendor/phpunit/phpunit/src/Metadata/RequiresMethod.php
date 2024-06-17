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
final class RequiresMethod extends Metadata
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
    private readonly string $methodName;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $methodName;

    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function __construct(int $level, string $className, string $methodName)
    {
        parent::__construct($level);

        $this->className  = $className;
        $this->methodName = $methodName;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresMethod $this
     */
    public function isRequiresMethod(): bool
=======
    public function isrequiresMethod(): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isrequiresMethod(): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
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
}
