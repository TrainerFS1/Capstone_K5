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
 */
final class UsesFunction extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $functionName;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $functionName
     */
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class UsesFunction extends Metadata
{
    private readonly string $functionName;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(int $level, string $functionName)
    {
        parent::__construct($level);

        $this->functionName = $functionName;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true UsesFunction $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isUsesFunction(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function functionName(): string
    {
        return $this->functionName;
    }

<<<<<<< HEAD
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function asStringForCodeUnitMapper(): string
    {
        return '::' . $this->functionName;
    }
}
