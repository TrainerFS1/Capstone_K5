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
final class ExcludeGlobalVariableFromBackup extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $globalVariableName;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $globalVariableName
     */
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class ExcludeGlobalVariableFromBackup extends Metadata
{
    private readonly string $globalVariableName;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function __construct(int $level, string $globalVariableName)
    {
        parent::__construct($level);

        $this->globalVariableName = $globalVariableName;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true ExcludeGlobalVariableFromBackup $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isExcludeGlobalVariableFromBackup(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function globalVariableName(): string
    {
        return $this->globalVariableName;
    }
}
