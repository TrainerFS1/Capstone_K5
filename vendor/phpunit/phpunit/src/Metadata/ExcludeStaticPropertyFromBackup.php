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
final class ExcludeStaticPropertyFromBackup extends Metadata
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;
<<<<<<< HEAD

    /**
     * @psalm-var non-empty-string
     */
    private readonly string $propertyName;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $propertyName
=======
    private readonly string $propertyName;

    /**
     * @psalm-param class-string $className
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function __construct(int $level, string $className, string $propertyName)
    {
        parent::__construct($level);

        $this->className    = $className;
        $this->propertyName = $propertyName;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true ExcludeStaticPropertyFromBackup $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isExcludeStaticPropertyFromBackup(): bool
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
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function propertyName(): string
    {
        return $this->propertyName;
    }
}
