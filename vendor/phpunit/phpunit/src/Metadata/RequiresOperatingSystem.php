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
final class RequiresOperatingSystem extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $operatingSystem;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $operatingSystem
     */
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class RequiresOperatingSystem extends Metadata
{
    private readonly string $operatingSystem;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(int $level, string $operatingSystem)
    {
        parent::__construct($level);

        $this->operatingSystem = $operatingSystem;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresOperatingSystem $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isRequiresOperatingSystem(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function operatingSystem(): string
    {
        return $this->operatingSystem;
    }
}
