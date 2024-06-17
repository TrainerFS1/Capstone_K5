<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Version;

use function version_compare;
use PHPUnit\Util\VersionComparisonOperator;

/**
 * @psalm-immutable
 *
<<<<<<< HEAD
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class ComparisonRequirement extends Requirement
{
    private readonly string $version;
    private readonly VersionComparisonOperator $operator;

    public function __construct(string $version, VersionComparisonOperator $operator)
    {
        $this->version  = $version;
        $this->operator = $operator;
    }

    public function isSatisfiedBy(string $version): bool
    {
        return version_compare($version, $this->version, $this->operator->asString());
    }

    public function asString(): string
    {
        return $this->operator->asString() . ' ' . $this->version;
    }
}
